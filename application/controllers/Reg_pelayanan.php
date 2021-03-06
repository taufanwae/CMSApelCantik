<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Reg_pelayanan extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        if (!$this->session->userdata('login')) {
            redirect('login','index');
        }
        $this->load->model('Reg_pelayanan_model');
    } 

    /*
     * Listing of reg_pelayanan
     */
    function index()
    {
        $lokasipelayanan_id = $this->session->userdata('lokasipelayanan_id');
        $level_akses = $this->session->userdata('level_akses');
        
        $params = array('lokasipelayanan_id'=> $lokasipelayanan_id,
            'level_akses' => $level_akses);
       

        $data['reg_pelayanan'] = $this->Reg_pelayanan_model->get_all_reg_pelayanan($params);
        
        $data['_view'] = 'reg_pelayanan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new list_user_register_pelayanan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_pelayanan' => $this->input->post('id_pelayanan'),
				'user_id' => $this->input->post('user_id'),
				'tipe_kb' => $this->input->post('tipe_kb'),
				'lokasipelayanan_id' => $this->input->post('lokasipelayanan_id'),
				'no_ktp' => $this->input->post('no_ktp'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'no_bpjs' => $this->input->post('no_bpjs'),
				'no_telp' => $this->input->post('no_telp'),
				'register_date' => $this->input->post('register_date'),
				'alamat' => $this->input->post('alamat'),
            );
            
            $list_user_register_pelayanan_id = $this->Reg_pelayanan_model->add_list_user_register_pelayanan($params);
            redirect('reg_pelayanan/index');
        }
        else
        {
			$this->load->model('M_jenispelayanan');
			$data['all_jenis_pelayanan'] = $this->M_jenispelayanan->get_all_jenis_pelayanan();

			$this->load->model('M_userapps');
			$data['all_mstunit'] = $this->M_userapps->get_all_mstunit();

			$this->load->model('Msttipekb_model');
			$data['all_msttipekb'] = $this->Msttipekb_model->get_all_msttipekb();

			$this->load->model('M_lokasipelayanan');
			$data['all_mstlokasipelayanan'] = $this->M_lokasipelayanan->get_all_mstlokasipelayanan();
            
            $data['_view'] = 'reg_pelayanan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a list_user_register_pelayanan
     */
    function edit($id_reg_pelayanan)
    {   
        // check if the list_user_register_pelayanan exists before trying to edit it
        $data['list_user_register_pelayanan'] = $this->Reg_pelayanan_model->get_list_user_register_pelayanan($id_reg_pelayanan);
        
        if(isset($data['list_user_register_pelayanan']['id_reg_pelayanan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   

                $status_daftar = $this->input->post('status_pendaftaran');
                $status_edited = $this->input->post('status_edited');
                $nama_status = "";

                $params = array(
					'tipe_kb' => $this->input->post('tipe_kb'),
					'lokasipelayanan_id' => $this->input->post('lokasipelayanan_id'),
					'no_ktp' => $this->input->post('no_ktp'),
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'email' => $this->input->post('email'),
					'no_bpjs' => $this->input->post('no_bpjs'),
					'no_telp' => $this->input->post('no_telp'),
					'alamat' => $this->input->post('alamat'),
                    'status_pendaftaran' => $status_daftar
                );

                $this->Reg_pelayanan_model->update_list_user_register_pelayanan($id_reg_pelayanan,$params); 



                if($status_edited != $status_daftar)
                {
                      switch ($status_daftar) {
                            case '1': $nama_status = "Pending"; break;
                            case '2': $nama_status = "Diproses"; break;
                            case '3': $nama_status = "Selesai"; break;
                            case '4': $nama_status = "Ditolak"; break;
                        }

                        $getToken = $this->Reg_pelayanan_model->getTokenFcm($this->input->post('user_id'))->row_array();
                        $TOKEN_FCM = $getToken['token_fcm'];

                        $id = $TOKEN_FCM;
                        $url = "https://fcm.googleapis.com/fcm/send";
                        $JUDUL_PESAN = "Status Pendaftaran Layanan KB";
                        $ISI_PESAN = "status pendaftaran layanan KB anda sudah berubah menjadi ".$nama_status;
                        $msg = [
                            "title"             => $JUDUL_PESAN,
                            "body"              => $ISI_PESAN
                        ];

                        $payload =  [
                                "title"     => $JUDUL_PESAN,
                                "body"      => $ISI_PESAN
                        ];

                        $fields = [
                                'to'            => $id,
                                'notification'  => $msg,
                                'data'      => $payload
                            ];

                        $headers = [
                            'Authorization: key=AAAA0Yca97E:APA91bFaCnAAUrIiehS7lq-mQ8ZyFU5331Eu1RHoUuG6uqDSJzlsR8bt61GrSwvke_T0z16ambgjuFW-84aDIDFenTIZEau0eKIT1EGRkpwimKjDIb-HjFBAg17siMRpJGKzuCxD6ia8',
                            'Content-Type: application/json'
                        ];
                        

                        $fields = json_encode($fields);
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt ( $ch, CURLOPT_POST, true );
                        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
                        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
                        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );
                        $result = curl_exec ( $ch );
                        $error = curl_error($ch);
                        curl_close ( $ch );
                }


           
                redirect('reg_pelayanan/index');
            }
            else
            {
				$this->load->model('M_jenispelayanan');
				$data['all_jenis_pelayanan'] = $this->M_jenispelayanan->get_all_jenis_pelayanan();

				$this->load->model('M_userapps');
				$data['all_mstunit'] = $this->M_userapps->get_all_mstunit();

				$this->load->model('Msttipekb_model');
				$data['all_msttipekb'] = $this->Msttipekb_model->get_all_msttipekb();

				$this->load->model('M_lokasipelayanan');
				$data['all_mstlokasipelayanan'] = $this->M_lokasipelayanan->get_all_mstlokasipelayanan();

                $data['_view'] = 'reg_pelayanan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The list_user_register_pelayanan you are trying to edit does not exist.');
    } 

    /*
     * Deleting list_user_register_pelayanan
     */
    function remove($id_reg_pelayanan)
    {
        $list_user_register_pelayanan = $this->Reg_pelayanan_model->get_list_user_register_pelayanan($id_reg_pelayanan);

        // check if the list_user_register_pelayanan exists before trying to delete it
        if(isset($list_user_register_pelayanan['id_reg_pelayanan']))
        {
            $this->Reg_pelayanan_model->delete_list_user_register_pelayanan($id_reg_pelayanan);
            redirect('reg_pelayanan/index');
        }
        else
            show_error('The list_user_register_pelayanan you are trying to delete does not exist.');
    }
    
}
