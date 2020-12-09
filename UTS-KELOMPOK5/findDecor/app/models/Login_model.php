<?php

class Login_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}
