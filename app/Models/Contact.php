<?php

/**
 * Este archivo se conecta a la base de datos
 */

namespace App\Models;
use mysqli;

class Contact
{
    
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;

    protected $connection; 
    protected $query;

    public function __construct()
    {
        $this->connection();
    }

    # Este metodo se conecta a la base de datos
    public function connection()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($this->connection->connect_error) {
            die('Error de conexion: ' . $this->connection->connect_error);
        }
        return $this->connection;
    }
    # Este metodo ejecuta una consulta a la base de datos
    public function query($sql)
    {
        $this->query = $this->connection->query($sql);
        return $this;
    }
    # Este metodo devuelve el primer resultado de la consulta
    public function first()
    {
        return $this->query->fetch_assoc();
    }
    # Este metodo devuelve todos los resultados de la consulta
    public function getAll()
    {
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }
}


