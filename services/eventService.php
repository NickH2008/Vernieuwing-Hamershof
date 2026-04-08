<?php

class eventService
{
    private $db;

    public function __construct()
    {
        $this->db = new databaseController();
    }

    public function getAllEvents()
    {
        $sql = "SELECT * FROM events ORDER BY event_date ASC, start_time ASC";
        return $this->db->read($sql) ?: [];
    }
}
