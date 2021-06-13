<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hakkinda extends CI_Controller
{

    public $viewFolder="hizmetler_hakkinda_v";


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {

        $viewData = new stdClass();
        $viewData->viewFolder=$this->viewFolder;

        $this->load->view("{$viewData->viewFolder}/index",$viewData);

    }





}