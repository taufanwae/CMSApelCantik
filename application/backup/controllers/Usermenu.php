<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usermenu extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }
        $this->load->model('Usermenu_model');
    } 

    /*
     * Listing of usermenu
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('usermenu/index?');
        $config['total_rows'] = $this->Usermenu_model->get_all_usermenu_count();
        $this->pagination->initialize($config);

        $data['usermenu'] = $this->Usermenu_model->getmenu($params);
        
        $data['_view'] = 'usermenu/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user_menu
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('level_id','Level Id','required');
		$this->form_validation->set_rules('menu_id','Menu Id','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'level_id' => $this->input->post('level_id'),
				'menu_id' => $this->input->post('menu_id'),
            );
            
            $user_menu_id = $this->Usermenu_model->add_user_menu($params);
            redirect('usermenu/index');
        }
        else
        {
			$this->load->model('M_levelakses');
			$data['all_mstlevel_akses'] = $this->M_levelakses->get_all_mstlevel_akses();

			$this->load->model('Mstmenu_model');
			$data['all_mstmenu'] = $this->Mstmenu_model->get_all_mstmenu();
            
            $data['_view'] = 'usermenu/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user_menu
     */
    function edit($idusermenu)
    {   
        // check if the user_menu exists before trying to edit it
        $data['user_menu'] = $this->Usermenu_model->get_user_menu($idusermenu);
        
        if(isset($data['user_menu']['idusermenu']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('level_id','Level Id','required');
			$this->form_validation->set_rules('menu_id','Menu Id','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'level_id' => $this->input->post('level_id'),
					'menu_id' => $this->input->post('menu_id'),
                );

                $this->Usermenu_model->update_user_menu($idusermenu,$params);            
                redirect('usermenu/index');
            }
            else
            {
				$this->load->model('M_levelakses');
				$data['all_mstlevel_akses'] = $this->M_levelakses->get_all_mstlevel_akses();

				$this->load->model('Mstmenu_model');
				$data['all_mstmenu'] = $this->Mstmenu_model->get_all_mstmenu();

                $data['_view'] = 'usermenu/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user_menu you are trying to edit does not exist.');
    } 

    /*
     * Deleting user_menu
     */
    function remove($idusermenu)
    {
        $user_menu = $this->Usermenu_model->get_user_menu($idusermenu);

        // check if the user_menu exists before trying to delete it
        if(isset($user_menu['idusermenu']))
        {
            $this->Usermenu_model->delete_user_menu($idusermenu);
            redirect('usermenu/index');
        }
        else
            show_error('The user_menu you are trying to delete does not exist.');
    }
    
}
