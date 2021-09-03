<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED); 
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Laporanbulanan extends CI_Controller{
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

      function webview_backup()
    {

        $tahun = $this->input->post('tahun') != "" ? $this->input->post('tahun') : date('Y');
        $data['dataperiode'] = $this->M_laporanbulanan->get_dataperiode($tahun);
     //   print_r($data['dataperiode']); die;
        //$data['_view'] = 'jumlahkkgrafik/webview';
        $this->load->view('jumlahkkgrafik/laporanbulanan',$data);
    }


    function webview()
    {
        $this->load->library('Spreadsheet_Excel_Reader');
        $excel = new Spreadsheet_Excel_Reader();
        $tahun = $this->input->post('tahun') != "" ? $this->input->post('tahun') : '';

        
        $getlastFile = $this->M_laporanbulanan->getLastFile($tahun);
        $arrTahun = array();

        if($getlastFile->num_rows() > 0)
        {
            $getLaporanBulanan = $this->M_laporanbulanan->getLaporanBulanan();
            foreach ($getLaporanBulanan->result_array() as $key) {
                $t['tahun'] = $key['tahun'];
                array_push($arrTahun, $t);
            }


            $get = $getlastFile->row();
            $file = $get->file_name;
        }else
        {
                $tf['tahun'] = date('Y');
                array_push($arrTahun, $tf);
                $tahun = date('Y');
                $file = "format_laporan_bulanan.xls";
        }


        $excel->read('upload/file/'.$file); // set the excel file name here  
        $data['link'] = "upload/file/".$file; 
        $data['arrTahun'] = $arrTahun; 

        $data['tahun'] = $tahun; 
        $data['data_excell']=$excel->sheets[0]['cells'];

        $tahun = $this->input->post('tahun') != "" ? $this->input->post('tahun') : date('Y');
        $this->load->view('jumlahkkgrafik/laporanbulanan_back',$data);
    }

    function webviewtahunan()
    {
        $this->load->library('Spreadsheet_Excel_Reader');
        $excel = new Spreadsheet_Excel_Reader();

        $getFile = $this->M_laporanbulanan->getFileTahunan();

        if($getFile->num_rows() > 0)
        {
            $get = $getFile->row();
            $file = $get->file_name;
        }else
        {
            $file = "format_laporan_tahunan.xls";
        }

        $excel->read('upload/file/'.$file); // set the excel file name here  
        $data['link'] = "upload/file/".$file; 

        $data['data_excell']=$excel->sheets[0]['cells'];

        $this->load->view('jumlahkkgrafik/laporantahunan',$data);
    }
    
}
