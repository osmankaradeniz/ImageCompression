<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class İmco_jpeg extends CI_Controller
{

    public $viewFolder="imco_hizmetler/imco_jpeg";

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