<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Dosen extends CI_Controller

{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nim = '01001009';
        $this->dsn1->nama = 'Anisa';
        $this->dsn1->gender = 'P';
        $this->dsn1->tmp_lahir = 'Depok';
        $this->dsn1->tgl_lahir = '09-10-03';
        $this->dsn1->nipd = '0910003';
        $this->dsn1->pendidikan = 'S3';
        $this->dsn1->semester = 'SMT6';
        $this->dsn1->matkul = 'Basis Data';
        $this->dsn1->hari = 'Senin';
        $this->dsn1->ruangan = '03';
        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nim = '01001009';
        $this->dsn2->nama = 'Anisa';
        $this->dsn2->gender = 'P';
        $this->dsn2->tmp_lahir = 'Depok';
        $this->dsn2->tgl_lahir = '09-10-03';
        $this->dsn2->nipd = '0910003';
        $this->dsn2->pendidikan = 'S3';
        $this->dsn2->semester = 'SMT5';
        $this->dsn2->matkul = 'Pemrograman Website';
        $this->dsn2->hari = 'Jumat';
        $this->dsn2->ruangan = '037';
        $list_dsn = [$this->dsn1, $this->dsn2];
        $data['list_dsn'] = $list_dsn;
        // $this->load->view('header');
        $this->load->view('dosen/index', $data);
        // $this->load->view('footer');
    }
}
