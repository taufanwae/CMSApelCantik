<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Userapps extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }
        $this->load->model('M_userapps');
    } 

    /*
     * Listing of mstunit
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
      

        $data['mstunit'] = $this->M_userapps->get_all_mstunit($params);
        
        $data['_view'] = 'userapps/index';
        $this->load->view('layouts/main',$data);
    }  

    /*
     * Editing a user_aplikasi
     */
    function edit($user_id)
    {   
        // check if the user_aplikasi exists before trying to edit it
        $data['user_aplikasi'] = $this->M_userapps->get_user_aplikasi($user_id);
        
        if(isset($data['user_aplikasi']['user_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('full_name','Full Name','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'full_name' => $this->input->post('full_name'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('no_hp'),
					'no_ktp' => $this->input->post('no_ktp')
                );

                $this->M_userapps->update_user_aplikasi($user_id,$params);            
                redirect('userapps/index');
            }
            else
            {
                $data['_view'] = 'userapps/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user_aplikasi you are trying to edit does not exist.');
    }
}
