<?php


class Blog extends Model
{
    protected function getLatest(){
        $result = $this->db->conn->query("SELECT * FROM blog ORDER BY created_at DESC");
        return $result;
    }
}