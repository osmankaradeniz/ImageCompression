<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Iletisim extends CI_Controller
{

    public $viewFolder="iletisim_v";


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('email');
    }

    public function index(){

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;

        $this->load->view("{$viewData->viewFolder}/index", $viewData);
    }

    public function iletisim_form()
    {

        $adsoyad = $this->input->post('adsoyad');
        $eposta = $this->input->post('eposta');
        $telefon = $this->input->post('telefon');
        $mesaj = $this->input->post('mesaj');

        if(empty($adsoyad) || empty($eposta) || empty($telefon) || empty($mesaj))
        {
            $uyari = '<script type="text/javascript">swal("Hata !", "Lütfen Formda Boş Alan Bırakmayınız ", "error")</script>';
            $this->session->set_flashdata('uyari', $uyari);
            redirect(base_url('Iletisim'),'refresh');
        }

        else
        {
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'mail.osmankaradeniz.com';
            $config['smtp_user'] = '_mainaccount@osmankaradeniz.com';
            $config['smtp_pass'] = '********';
            $config['smtp_port'] = 587;
            $this->email->initialize($config);

            $this->email->set_newline("\r\n");

            $konu = "İMCO İletişim -> Gönderen : $adsoyad ";


            // Compose a simple HTML email message
            $icerik = '<html><body>';
            $icerik .= '<p style="color:#080;font-size:18px;">'
                . 'Ad Soyad : ' . $adsoyad . '<br />'
                . 'Mail Adresi : ' . $eposta . '<br />'
                . 'Telefon  :' . $telefon . '<br /> '
                . ' Mesaj  :  ' . $mesaj .'</p></body></html>';




            $this->email->from($eposta);
            $this->email->set_mailtype("html");
            $this->email->to('imco.osmankaradeniz@gmail.com');
            $this->email->subject($konu);
            $this->email->message($icerik);

            if ($this->email->send()) {
                // gönderildi

                $uyari = '<script type="text/javascript">swal("Gönderildi", "Mesajınız başarılı şekilde gönderilmiştir. En kısa sürede size geri dönüş yapılacaktır.", "success")</script>';
            } else {
                //hata
                $uyari = '<script type="text/javascript">swal("Hata !", "Mesajınız teknik bir hatadan dolayı gönderilemedi.", "error")</script>';
            }

            $this->session->set_flashdata('uyari', $uyari);
            redirect(base_url('Iletisim'),'refresh');


        }


    }



}