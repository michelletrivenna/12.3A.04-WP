<?php

class Belajar extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function parsing()
    {
        //$data['bio'] = "Nama Saya Michelle";
        $data=array(
            'nama' => "Michelle Trivenna Silalahi",
            'pekerjaan' => "Mahasiswa"
        );
        $this->load->view('view_belajar', $data);
    }
}