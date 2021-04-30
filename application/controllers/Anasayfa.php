<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Anasayfa extends CI_Controller
{

    public $viewFolder="anasayfa_v";


    public function __construct()
    {
        parent::__construct();
        $this->load->model("anasayfa_model");
    }


    public function index()
    {

        $viewData = new stdClass();
        $viewData->viewFolder=$this->viewFolder;

        $this->load->view("{$viewData->viewFolder}/index",$viewData);

    }


    public function notfound()
    {
        $viewData = new stdClass();
        $viewData->viewFolder='404';
        $this->load->view("{$viewData->viewFolder}/index",$viewData);

    }



}