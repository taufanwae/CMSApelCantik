<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Laporanbulanankota extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        
        $this->load->model('M_laporanbulanan');
    } 

    /*
     * Listing of dataperiode
     */
    function index()
    {
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }

        $idperiode = $this->input->post('idperiode') != "" ? $this->input->post('idperiode') : '';
        $data['all_periode'] = $this->M_laporanbulanan->get_all_periode();
        $data['dataperiode'] = $this->M_laporanbulanan->getdatakeluargaperiode($idperiode);
        $data['_view'] = 'jumlahkkgrafik/index';
        $this->load->view('layouts/main',$data);
    }

      function webview()
    {

        $tahun = $this->input->post('tahun') != "" ? $this->input->post('tahun') : date('Y');
        $data['dataperiode'] = $this->M_laporanbulanan->get_dataperiode($tahun);
     //   print_r($data['dataperiode']); die;
        //$data['_view'] = 'jumlahkkgrafik/webview';
        $this->load->view('jumlahkkgrafik/laporanbulanan2',$data);
    }


    
}
