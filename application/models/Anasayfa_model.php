<?php

class anasayfa_model extends CI_Model
{

    public $tableName="compstatics";



    public function __construct()
    {
        parent::__construct();
    }


    public function get_all($where = array(),$order)
    {
        $result= $this->db
            ->where($where)
            ->order_by($order)
            ->get($this->tableName)
            ->result();

        return $result;
    }

    public function get($where=array(),$order)
    {
        $result=$this->db
            ->where($where)
            ->order_by($order)
            ->get($this->tableName)
            ->row();
        return $result;

    }

}