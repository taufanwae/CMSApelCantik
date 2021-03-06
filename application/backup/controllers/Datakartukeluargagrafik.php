<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Datakartukeluargagrafik extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        
        $this->load->model('M_datakartukeluarga');
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
        $data['all_periode'] = $this->M_datakartukeluarga->get_all_periode();
        $data['dataperiode'] = $this->M_datakartukeluarga->getdatakeluargaperiode($idperiode);
        $data['_view'] = 'jumlahkkgrafik/index';
        $this->load->view('layouts/main',$data);
    }

      function webview()
    {

        $idperiode = $this->input->post('idperiode') != "" ? $this->input->post('idperiode') : '';
        $data['all_periode'] = $this->M_datakartukeluarga->get_all_periode();
        $data['dataperiode'] = $this->M_datakartukeluarga->getdatakeluargaperiode($idperiode);
        //$data['_view'] = 'jumlahkkgrafik/webview';
        $this->load->view('jumlahkkgrafik/webview',$data);
    }


  
    /*
     * Adding a new desa
     */
    function add()
    {   
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }

        $this->load->library('form_validation');

		$this->form_validation->set_rules('jml_lakilaki','Jumlah Laki Laki','required');
		$this->form_validation->set_rules('jml_perempuan','Jumlah perempuan','required');
        $this->form_validation->set_rules('idperiode','Periode','required');
        $this->form_validation->set_rules('kecamatan_id','Kecamatan','required');
		
		if($this->form_validation->run())     
        {   
            $checkDuplikat = $this->M_datakartukeluarga->dataDuplikat($this->input->post('kecamatan_id'),
            $this->input->post('idperiode'));

            if($checkDuplikat->num_rows() > 0)
            {
                $this->session->set_flashdata("Message","kecamatan dengan periode yang dipilih sudah pernah diinput");
                redirect('datakartukeluarga/add');
            }
            $params = array(
				'jml_lakilaki' => $this->input->post('jml_lakilaki'),
				'jml_perempuan' => $this->input->post('jml_perempuan'),
                'idperiode' => $this->input->post('idperiode'),
                'kecamatan_id' => $this->input->post('kecamatan_id'),
            );
            
            $desa_id = $this->M_datakartukeluarga->add_dataperiode($params);
            redirect('datakartukeluarga/index');
        }
        else
        {
			$this->load->model('M_listkecamatan');
            $data['all_mstkecamatan'] = $this->M_listkecamatan->get_all_mstkecamatan();
            $data['all_periode'] = $this->M_datakartukeluarga->get_all_periode();
            
            $data['_view'] = 'jumlahkk/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a desa
     */
    function edit($idperode)
    {   
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }

        // check if the desa exists before trying to edit it
        $data['desa'] = $this->M_datakartukeluarga->get_dataperiode($idperode);
        
        if(isset($data['desa']['idjumlahkk']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('jml_lakilaki','Jumlah Laki Laki','required');
            $this->form_validation->set_rules('jml_perempuan','Jumlah perempuan','required');
            $this->form_validation->set_rules('idperiode','Periode','required');
            $this->form_validation->set_rules('kecamatan_id','Kecamatan','required');
		
			if($this->form_validation->run())     
            {   
                 $params = array(
                'jml_lakilaki' => $this->input->post('jml_lakilaki'),
                'jml_perempuan' => $this->input->post('jml_perempuan'),
                'idperiode' => $this->input->post('idperiode'),
                'kecamatan_id' => $this->input->post('kecamatan_id'),
            );

                $this->M_datakartukeluarga->update_dataperiode($idperode,$params);            
                redirect('datakartukeluarga/index');
            }
            else
            {

              
                $this->load->model('M_listkecamatan');
                $data['all_mstkecamatan'] = $this->M_listkecamatan->get_all_mstkecamatan();
                $data['all_periode'] = $this->M_datakartukeluarga->get_all_periode();

                $data['_view'] = 'jumlahkk/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The desa you are trying to edit does not exist.');
    } 

    /*
     * Deleting desa
     */
    function remove($desa_id)
    {
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }
        $desa = $this->M_datakartukeluarga->get_dataperiode($desa_id);
        //print_r($desa); die;

        // check if the desa exists before trying to delete it
        if(isset($desa['idperiode']))
        {
            $this->M_datakartukeluarga->delete_dataperiode($desa_id);
            redirect('datakartukeluarga/index');
        }
        else
            show_error('The data you are trying to delete does not exist.');
    }
    
}
