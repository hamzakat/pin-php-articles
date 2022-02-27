<?php

require_once 'database/MySQLConnection.php';

/**
 * This base class will be used to extend DAOs (Data Access Object) for data models
 * 
 */

abstract class BaseDAO
{
    // required for establishing db connection
    private $db;
    protected $pdo;

    // required for data mapping (db row to object)
    private $reflection;

    abstract protected function getModelClass();
    abstract protected function getModelTable();

    // implmented based on model 
    abstract protected function add($object);


    function __construct()
    {
        $this->db = new MySQLConnection(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD);
        $this->pdo = $this->db->getPDO();

        $this->reflection = new ReflectionClass($this->getModelClass());
    }

    /**
     * The query can be parameterized by assigning the arguments
     * @param paramKey name of the field in database
     * @param param WHERE searching value
     */
    public function getAll($paramKey = false, $paramValue = false)
    {
        $query = "";
        if ($paramKey && $paramKey) {
            $query = "SELECT * FROM " . $this->getModelTable() . " WHERE " . $paramKey . " = :paramValue;";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':paramValue', $paramValue);
        } else {
            $query = "SELECT * FROM " . $this->getModelTable() . ";";
            $stmt = $this->pdo->prepare($query);
        }

        if ($stmt->execute()) {
            $result = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($result, $this->mapToObject($row));
            }
            return $result;
        }
        return [];
    }


    protected function getFields()
    {
        $properties = $this->reflection->getProperties(ReflectionProperty::IS_PRIVATE);
        $fields = [];
        foreach ($properties as $prop) {
            array_push($fields, $prop->getName());
        }
        return $fields;
    }

    /* Mapping DB row to object */
    protected function mapToObject($row)
    {
        $fields = $this->getFields();
        $properties = array();
        foreach ($fields as $field) {
            $properties[$field] = $row[$field];
        }
        return $this->reflection->newInstanceArgs($properties);
    }

    protected function getIdField()
    {
        return "id";
    }
}
