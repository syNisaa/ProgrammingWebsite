<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class matakuliah extends CI_Controller

{
    public function index()
    {
        $this->load->model('dosen_model', 'mt1');
        $this->mt1->id = 1;
        $this->mt1->nama = 'basis Data';
        $this->mt1->sks = '4';
        $this->mt1->kode = '6SI05';
        $this->mt1->semester = 'SMT6';
        $this->mt1->dosen = 'Anisa';
        $this->mt1->matkul = 'Basis Data';
        $this->mt1->hari = 'Senin';
        $this->mt1->ruangan = '03';
        $this->load->model('dosen_model', 'mt2');
        $this->mt2->id = 1;
        $this->mt2->nama = 'Pemwograan WEB';
        $this->mt2->sks = '2';
        $this->mt2->kode = '6SI05P';
        $this->mt2->dosen = 'Anisa';
        $this->mt2->semester = 'SMT5';
        $this->mt2->matkul = 'Pemrograman Website';
        $this->mt2->hari = 'Jumat';
        $this->mt2->ruangan = '037';
        $list_mt = [$this->mt1, $this->mt2];
        $data['list_mt'] = $list_mt;
        // $this->load->view('header');
        $this->load->view('matkul/index', $data);
        // $this->load->view('footer');
    }
}
