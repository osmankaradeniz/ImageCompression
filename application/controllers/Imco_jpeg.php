<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Imco_jpeg extends CI_Controller
{

    public $viewFolder="imco_hizmetler/imco_jpeg";

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



    public function push($level)
    {
        $base_url =  base_url();
        $uploads_path = "assets/uploads/";
        $compressed_path = "assets/compressed/";
        $err_icon_path= "assets/other/js/icons/error.png";

        if ($_FILES['file']['type'] != 'image/jpeg') {
            echo json_encode([
                'error' => true,
                'error_img'=>"{$base_url}{$err_icon_path}",
                'msg' => 'sadece JPEG/JPG uzantılı görüntüleri seçebilirsiniz !'
            ]);
            return;
        }

        else {

        $tmp = $_FILES['file']['tmp_name'];
        $path = basename($_FILES['file']['name']);

        if( move_uploaded_file($tmp, "assets/uploads/{$path}"))
            {

                $preview_imagedata = file_get_contents($base_url.$uploads_path.$path);
                $base64_image = base64_encode($preview_imagedata);
                $src_preview = "data:image/jpg;base64,".$base64_image;
                $preview_size=filesize($uploads_path.$path);

                // SIKIŞTIRMA TO DO START

                $this->load->library('CompressLibrary');

                $ImgCompressor = new CompressLibrary();
                $ImgCompressor->run( $uploads_path . $path, 'jpg', $level);

                // SIKIŞTIRMA TO DO STOP


                $compressed_imagedata = file_get_contents($base_url.$compressed_path.$path);
                $base64_image = base64_encode($compressed_imagedata);
                $src_compressed = "data:image/jpg;base64,".$base64_image;
                $compressed_size=filesize($compressed_path.$path);



                // Yüklenen ve işlenmiş görüntüler 2 dakika sunucuda vakit geçirdikten sonra
                // silinmesi için kullandığım metod ve lib.
                $this->load->library('FilesLibrary');
                $FilesLibrary = new FilesLibrary();

                $FilesLibrary->deleteOlderFiles($uploads_path,2);
                $FilesLibrary->deleteOlderFiles($compressed_path,2);


                $veri =array(
                'image_url'=>"{$path}",
                'image_type'=>"JPEG",
                'image_org_size'=>"$preview_size",
                'image_comp_size'=>"$compressed_size",
                'ip_adress'=>getenv('REMOTE_ADDR'),
                'createdAt'=>date("Y/m/d")
                );

                $this->anasayfa_model->add($veri);


                echo json_encode([
                    'success' => true,
                    'upload_path' => "{$base_url}{$uploads_path}",
                    'preview_img_url'=>"{$base_url}{$uploads_path}{$path}",
                    'preview_img'=>"{$src_preview}",
                    'preview_size'=>"$preview_size",
                    'compress_img_url'=>"{$base_url}{$compressed_path}{$path}",
                    'compress_preview_img'=>"{$src_compressed}",
                    'compressed_size'=>"{$compressed_size}",
                    'file' => $_FILES['file']['name']
                ]);
                return;
            }

        }

    }






}