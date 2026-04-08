<?php

class tehuurService
{
    public $db;

    public function __construct()
    {
        $this->db = new databaseController();
    }

    /**
     * Create a new rental request
     */
    public function createRentalRequest($postData, $filesData)
    {
        try {
            // Validate input data
            $validationResult = $this->validateRentalData($postData);
            if (!$validationResult['valid']) {
                return $this->createErrorResponse($validationResult['message']);
            }

            // Handle file uploads
            $uploadResult = $this->handleFileUploads($filesData);
            if (!$uploadResult['success']) {
                return $this->createErrorResponse($uploadResult['message']);
            }

            // Save to database
            $saveResult = $this->saveRentalRequest($postData, $uploadResult['files']);
            if (!$saveResult['success']) {
                return $this->createErrorResponse($saveResult['message']);
            }

            return $this->createSuccessResponse("Uw huurverzoek is succesvol verzonden. Wij nemen zo snel mogelijk contact met u op.");

        } catch (Exception $e) {
            error_log("Rental request error: " . $e->getMessage());
            return $this->createErrorResponse("Er is een onverwachte fout opgetreden. Probeer het opnieuw.");
        }
    }

    /**
     * Validate rental request data
     */
    private function validateRentalData($data)
    {
        $contactName = $data['contact_name'] ?? '';
        $contactEmail = $data['contact_email'] ?? '';
        $contactPhone = $data['contact_phone'] ?? '';

        // Check required fields (only name and email are required in current form)
        if (empty($contactName) || empty($contactEmail)) {
            return [
                'valid' => false,
                'message' => 'Vul alle verplichte velden in (*)'
            ];
        }

        // Validate email format
        if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
            return [
                'valid' => false,
                'message' => 'Voer een geldig e-mailadres in'
            ];
        }

        return ['valid' => true];
    }

    /**
     * Handle file uploads for business plan and logo
     */
    private function handleFileUploads($files)
    {
        $uploadDir = __DIR__ . '/../uploads/';

        // Create uploads directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $uploadedFiles = [
            'business_plan_path' => '',
            'logo_path' => ''
        ];

        // Handle business plan upload
        if (isset($files['business_plan']) && $files['business_plan']['error'] === UPLOAD_ERR_OK) {
            $result = $this->uploadFile($files['business_plan'], $uploadDir, 'business_plan');
            if (!$result['success']) {
                return ['success' => false, 'message' => $result['message']];
            }
            $uploadedFiles['business_plan_path'] = $result['path'];
        }

        // Handle logo upload
        if (isset($files['logo']) && $files['logo']['error'] === UPLOAD_ERR_OK) {
            $result = $this->uploadFile($files['logo'], $uploadDir, 'logo');
            if (!$result['success']) {
                return ['success' => false, 'message' => $result['message']];
            }
            $uploadedFiles['logo_path'] = $result['path'];
        }

        return ['success' => true, 'files' => $uploadedFiles];
    }

    /**
     * Upload a single file
     */
    private function uploadFile($file, $uploadDir, $prefix)
    {
        $fileName = basename($file['name']);
        $targetPath = $uploadDir . $prefix . '_' . time() . '_' . $fileName;

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            // Return relative path for database storage
            return [
                'success' => true,
                'path' => str_replace(__DIR__ . '/../', '', $targetPath)
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Fout bij het uploaden van bestand: ' . $fileName
            ];
        }
    }

    /**
     * Save rental request to database
     */
    private function saveRentalRequest($data, $files)
    {
        $sql = "INSERT INTO rental_requests (
            contact_name, contact_email, contact_phone,
            shop_name, shop_category, shop_description,
            preferred_size, preferred_location, start_date,
            business_plan_path, logo_path, terms_accepted,
            created_at
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

        $params = [
            $data['contact_name'] ?? '',
            $data['contact_email'] ?? '',
            $data['contact_phone'] ?? '',
            $data['shop_name'] ?? '', // This is now the selected pand from dropdown
            '', // shop_category - not used in current form
            $data['shop_description'] ?? '',
            null, // preferred_size - not used in current form
            '', // preferred_location - not used in current form
            null, // start_date - not used in current form
            $files['business_plan_path'],
            $files['logo_path'],
            0 // terms_accepted - not used in current form
        ];

        $result = $this->db->save($sql, $params);

        if ($result) {
            return ['success' => true];
        } else {
            return [
                'success' => false,
                'message' => 'Er is een fout opgetreden bij het opslaan van uw verzoek. Probeer het opnieuw.'
            ];
        }
    }

    /**
     * Get all rental requests (for admin purposes)
     */
    public function getAllRentalRequests()
    {
        $sql = "SELECT * FROM rental_requests ORDER BY created_at DESC";
        return $this->db->read($sql);
    }

    /**
     * Get rental request by ID
     */
    public function getRentalRequestById($id)
    {
        $sql = "SELECT * FROM rental_requests WHERE id = ?";
        $result = $this->db->read($sql, [$id]);
        return $result ? $result[0] : null;
    }

    /**
     * Update rental request status
     */
    public function updateRentalStatus($id, $status)
    {
        $sql = "UPDATE rental_requests SET status = ? WHERE id = ?";
        return $this->db->save($sql, [$status, $id]);
    }

    /**
     * Helper methods for responses
     */
    private function createSuccessResponse($message)
    {
        return [
            'status' => 'success',
            'message' => $message
        ];
    }

    private function createErrorResponse($message)
    {
        return [
            'status' => 'error',
            'message' => $message
        ];
    }
}