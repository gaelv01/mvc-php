<?php

namespace App\Models;

use mysqli;

class Model
{
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;

    protected $connection;
    protected $query;

    protected $select = '*';
    protected $where = '', $values = [];
    protected $orderBy = '';
    protected $groupBy = '';

    protected $table;

    public function __construct()
    {
        $this->connection();
    }

    # Funciones de conexión

    public function connection()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($this->connection->connect_error) {
            die('Error de conexion: ' . $this->connection->connect_error);
        }
        return $this->connection;
    }

    # Funciones de consulta

    public function query($sql, $data = [], $params = null)
    {
        if (!empty($data)) {
            if ($params === null) {
                $params = str_repeat('s', count($data));
            }
            $stmt = $this->connection->prepare($sql);
            if ($stmt === false) {
                die('Error en la preparación de la consulta: ' . $this->connection->error);
            }
            $stmt->bind_param($params, ...$data);
            $stmt->execute();
            $this->query = $stmt->get_result();
        } else {
            $this->query = $this->connection->query($sql);
        }

        return $this;
    }

    public function select(...$columns)
    {
        $this->select = implode(', ', $columns);
        return $this;
    }

    public function where($column, $operator, $value = null)
    {
        if ($value === null) {
            $value = $operator;
            $operator = '=';
        }

        if ($this->where) {
            $this->where .= " AND {$column} {$operator} ?";
        } else {
            $this->where = "{$column} {$operator} ?";
        }

        $this->values[] = $value;

        return $this;
    }

    public function orderBy($column, $order = 'ASC')
    {
        if ($this->orderBy) {
            $this->orderBy .= ", {$column} {$order}";
        } else {
            $this->orderBy = "{$column} {$order}";
        }
        return $this;
    }

    public function groupBy($column)
    {
        if ($this->groupBy) {
            $this->groupBy .= ", {$column}";
        } else {
            $this->groupBy = $column;
        }
        return $this;
    }

    # Funciones de formato de resultados

    public function first()
    {
        if (empty($this->query)) {

            $sql = "SELECT {$this->select} FROM {$this->table}";

            if ($this->where) {
                $sql .= " WHERE {$this->where}";
            }

            if ($this->orderBy) {
                $sql .= " ORDER BY {$this->orderBy}";
            }

            if ($this->groupBy) {
                $sql .= " GROUP BY {$this->groupBy}";
            }

            $this->query($sql, $this->values);
        }
        return $this->query->fetch_assoc();
    }

    public function get()
    {
        if (empty($this->query)) {

            $sql = "SELECT {$this->select} FROM {$this->table}";

            if ($this->where) {
                $sql .= " WHERE {$this->where}";
            }

            if ($this->orderBy) {
                $sql .= " ORDER BY {$this->orderBy}";
            }

            if ($this->groupBy) {
                $sql .= " GROUP BY {$this->groupBy}";
            }

            $this->query($sql, $this->values);
        }

        return $this->query->fetch_all(MYSQLI_ASSOC);
    }

    public function paginate($cant = 15)
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;

        if (empty($this->query)) {

            $sql = "SELECT {$this->select} FROM {$this->table}";

            if ($this->where) {
                $sql .= " WHERE {$this->where}";
            }

            if ($this->orderBy) {
                $sql .= " ORDER BY {$this->orderBy}";
            }

            if ($this->groupBy) {
                $sql .= " GROUP BY {$this->groupBy}";
            }
            
            $sql .= " LIMIT " . (($page - 1) * $cant) . ", {$cant}";
            $data = $this->query($sql, $this->values)->get();
        }

        $total = $this->query("SELECT FOUND_ROWS() as total")->first()['total'];

        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri, '/');

        if (strpos($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }

        $last_page = ceil($total / $cant);
        
        return [
            'total' => $total,
            'from' => ($page - 1) * $cant + 1,
            'to' => ($page - 1) * $cant + count($data),
            'current_page' => $page,
            'last_page' => $last_page,
            'next_page_url' => $page < $last_page ? '/' . $uri . '?page=' . ($page + 1) : null,
            'prev_page_url' => $page > 1 ? '/' . $uri . '?page=' . ($page - 1) : null,
            'data' => $data,
        ];
    }

    # Funciones de CRUD

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql)->get();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        return $this->query($sql, [$id], 'i')->first();
    }

    public function create($data)
    {
        $columns = array_keys($data);
        $columns = implode(', ', $columns);

        $values = array_values($data);
        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES (" . str_repeat('?,', count($values) - 1) . "?)";

        $this->query($sql, $values);

        $insert_id = $this->connection->insert_id;
        return $this->find($insert_id);
    }

    public function update($id, $data)
    {
        $fields = [];
        foreach ($data as $key => $value) {
            $fields[] = "{$key} = ?";
        }

        $fields = implode(', ', $fields);

        $sql = "UPDATE {$this->table} SET {$fields} WHERE id = ?";

        $values = array_values($data);
        $values[] = $id;

        $this->query($sql, $values);
        return $this->find($id);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        return $this->query($sql, [$id], 'i');
    }
}
