<?php

require_once "Model.php";

class Product extends Model
{
    protected $allowed_products = ['all','latest','random'];
    protected function getLatest($table){
        return $this->db->conn->query("SELECT * FROM {$table} ORDER BY item_register DESC");
    }
    protected function getRandom($table){
        return $this->db->conn->query("SELECT * FROM {$table} ORDER BY RAND() LIMIT 10");
    }


}