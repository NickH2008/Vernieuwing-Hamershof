<?php

class agendaService
{
    private $db;

    public function __construct()
    {
        $this->db = new databaseController();
    }

        public function getAgenda()
        {
            $sql = "SELECT * FROM agenda";
            return $this->db->read($sql);
        }
}