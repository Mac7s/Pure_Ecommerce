<?php

use Winter\SourceEcommerce\database\DBController;

class Model
{
    public $db = null;
    protected $allowed_products = ['all', 'latest', 'random'];

    public function __construct(DBController $database)
    {
        if (!isset($database->conn)) return null;
        $this->db = $database;

    }

//fetch data using getData Method
    public function getData($table = '', $type = 'all')
    {
        if (!in_array($type, $this->allowed_products)) die('not found');
        $function_name = 'get' . ucfirst($type);
        $result = $this->$function_name($table);
        return $this->objectsOfProducts($result);
    }


    protected function objectsOfProducts($result)
    {
        $arr = [];
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $arr[] = $item;
        }
        return json_decode(json_encode($arr));
    }

    protected function getAll($table){
        return $this->db->conn->query("SELECT * FROM {$table}");
    }






}
