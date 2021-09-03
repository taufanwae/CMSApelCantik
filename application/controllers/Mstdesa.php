<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mstdesa extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }
        $this->load->model('Mstdesa_model');
    } 

    /*
     * Listing of mstdesa
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mstdesa/index?');
        $config['total_rows'] = $this->Mstdesa_model->get_all_mstdesa_count();
        $this->pagination->initialize($config);

        $data['mstdesa'] = $this->Mstdesa_model->get_all_mstdesa($params);
        
        $data['_view'] = 'mstdesa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new desa
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama_desa','Nama Desa','required');
		$this->form_validation->set_rules('kecamatan_id','Kecamatan Id','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'kecamatan_id' => $this->input->post('kecamatan_id'),
				'nama_desa' => $this->input->post('nama_desa'),
            );
            
            $desa_id = $this->Mstdesa_model->add_desa($params);
            redirect('mstdesa/index');
        }
        else
        {
			$this->load->model('M_listkecamatan');
			$data['all_mstkecamatan'] = $this->M_listkecamatan->get_all_mstkecamatan();
            
            $data['_view'] = 'mstdesa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a desa
     */
    function edit($desa_id)
    {   
        // check if the desa exists before trying to edit it
        $data['desa'] = $this->Mstdesa_model->get_desa($desa_id);
        
        if(isset($data['desa']['desa_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama_desa','Nama Desa','alpha|required');
			$this->form_validation->set_rules('kecamatan_id','Kecamatan Id','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'kecamatan_id' => $this->input->post('kecamatan_id'),
					'nama_desa' => $this->input->post('nama_desa'),
                );

                $this->Mstdesa_model->update_desa($desa_id,$params);            
                redirect('mstdesa/index');
            }
            else
            {
				$this->load->model('M_listkecamatan');
				$data['all_mstkecamatan'] = $this->M_listkecamatan->get_all_mstkecamatan();

                $data['_view'] = 'mstdesa/edit';
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
        $desa = $this->Mstdesa_model->get_desa($desa_id);

        // check if the desa exists before trying to delete it
        if(isset($desa['desa_id']))
        {
            $this->Mstdesa_model->delete_desa($desa_id);
            redirect('mstdesa/index');
        }
        else
            show_error('The desa you are trying to delete does not exist.');
    }
    
}
