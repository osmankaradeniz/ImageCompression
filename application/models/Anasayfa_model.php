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

    public function get_total_row()
    {
        $count=$this->db->count_all($this->tableName, FALSE);
        return $count;
    }

    public function get_rows_optim($where)
    {

        $count= $this->db
            ->where($where)
            ->get($this->tableName)
            ->num_rows();

        return $count;
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


    public function add($data = array())
    {
        $result = $this->db
            ->insert($this->tableName,$data);

        return $result;
    }


}