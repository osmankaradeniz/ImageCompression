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

        $jpeg_toplam=$this->anasayfa_model->get_rows_optim(array( 'image_type'=>'JPEG' ));
        $gif_toplam=$this->anasayfa_model->get_rows_optim(array( 'image_type'=>'GIF' ));
        $png_toplam=$this->anasayfa_model->get_rows_optim(array( 'image_type'=>'PNG' ));
        $hepsi_toplam=$this->anasayfa_model->get_total_row();


        $viewData->toplam=$hepsi_toplam;
        $viewData->jpeg_toplam=$jpeg_toplam;
        $viewData->gif_toplam=$gif_toplam;
        $viewData->png_toplam=$png_toplam;


        $this->load->view("{$viewData->viewFolder}/index",$viewData);

    }






    public function notfound()
    {
        $viewData = new stdClass();
        $viewData->viewFolder='404';
        $this->load->view("{$viewData->viewFolder}/index",$viewData);

    }



}