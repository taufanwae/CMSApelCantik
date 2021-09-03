<?php
date_default_timezone_set("Asia/Jakarta");
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class ApiPesan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_api','model');
        $this->load->model('M_pesanmasuk');
        if(count($this->input->post()) < 1)
        {
            $json = array('status'=>404, 'message'=>"no request data");
            echo json_encode($json);
            die;
        }
        
    }

    function index()
    {
        echo "";
    }



    function detail_pesan_masuk()
    {
        $tokenLogin     = secure_input($this->input->post('tokenLogin'));
        $user_id        = secure_input($this->input->post('user_id'));

        $checkToken = $this->model->checkTokenLogin(array('token_login'=> $tokenLogin));

        if($checkToken < 1)
        {
            $json = array('status'=>201, 'message'=>"invalid token");
            echo json_encode($json);
            die;
        }

        
        $data= $this->M_pesanmasuk->view_join_where('mst_pesan_detail','mstuser','user_id',array('mst_pesan_detail.user_id'=>$user_id),'date_created','asc');

        $arrData = array();
        foreach ($data as $key) {
            $d['id_pesan']  = $key['id_pesan'];
            $d['id_pesan_detail']  = $key['id_pesan_detail'];
            $d['admin_id']  = $key['admin_id'];
            $d['user_id']  = $key['user_id'];
            $d['message']  = $key['message'];
            $d['date_created']  =  strtotime($key['date_created']);
            $d['pesan_dari']  = $key['pesan_Dari'];

            array_push($arrData, $d);
        }

            $json = array('status'=>200, 'message'=>"success", 'data' => $arrData);
            echo json_encode($json);
    }

    function balasPesan()
    {

        $tokenLogin       = secure_input($this->input->post('tokenLogin'));
        $user_id          = secure_input($this->input->post('user_id'));
        $message          = secure_input($this->input->post('message'));
        $id_pesan         = secure_input($this->input->post('id_pesan'));
        $admin_id         = secure_input($this->input->post('admin_id'));

         $checkToken = $this->model->checkTokenLogin(array('token_login'=> $tokenLogin));




        if($checkToken < 1)
        {
            $json = array('status'=>201, 'message'=>"invalid token");
            echo json_encode($json);
            die;
        }

        $cekMstPesan = $this->M_pesanmasuk->view_where_order('mst_pesan',array('user_id'=>$user_id),'STATUS','DESC');
        if(count($cekMstPesan) < 1)
        {
             $data = array(
                      'created_date'=>date('Y-m-d H:i:s'),
                      'user_id'=>$user_id,
                      'STATUS' => '1'
                    );

            $this->M_pesanmasuk->insert('mst_pesan',$data);

            $getAdminId = $this->model->selectWhere('mst_pesan',array('user_id'=>$user_id))->row();
            $id_pesan = $getAdminId->id_pesan;

        }else
        {
            $id_pesan = $cekMstPesan[0]['id_pesan'];
        }

        $data = array('id_pesan'=>$id_pesan,
                      'date_created'=>date('Y-m-d H:i:s'),
                      'message'=>$message,
                      'user_id'=>$user_id,
                      'pesan_dari'=>'user'
                    );

        $this->M_pesanmasuk->insert('mst_pesan_detail',$data);


        $where = array('id_pesan' => $id_pesan);
        $this->M_pesanmasuk->update('mst_pesan', array('STATUS'=> '0','created_date'=>date('Y-m-d H:i:s')), $where);

        
        $lastId =$this->M_pesanmasuk->view_join_where('mst_pesan_detail','mstuser','user_id',array('admin_id'=>$admin_id,'mst_pesan_detail.user_id' => $user_id),'date_created','asc');
        $idTerakhir = $lastId[count($lastId)-1]['id_pesan_detail'];


            $json = array('status'=>200, 'message'=>"success", 'id_pesan_detail_terakhir' => $idTerakhir, 'id_pesan'=>$id_pesan);
            echo json_encode($json);

             // $log = date("d-m-Y H:i:s").PHP_EOL.
             //           print_r($_POST, true).PHP_EOL; 
             //        file_put_contents('test.txt', $json);

    }

    function ambilPesan()
    {
        $tokenLogin                 = secure_input($this->input->post('tokenLogin'));
        $user_id                    = secure_input($this->input->post('user_id'));
        $id_pesan_detail_terakhir   = secure_input($this->input->post('id_pesan_detail_terakhir'));
        $id_pesan                   = secure_input($this->input->post('id_pesan'));
        $admin_id                   = secure_input($this->input->post('admin_id'));

        $checkToken = $this->model->checkTokenLogin(array('token_login'=> $tokenLogin));

           
        if($checkToken < 1)
        {
            $json = array('status'=>201, 'message'=>"invalid token");
            echo json_encode($json);
            die;
        }

         if($id_pesan == "")
        {
            $json = array('status'=>201, 'message'=>"invalid token");
            echo json_encode($json);
            die;
        }

        $data = $this->M_pesanmasuk->getLastPesanApi($id_pesan,$user_id,$id_pesan_detail_terakhir);

         $arrData = array();
        foreach ($data as $key) {
            $d['id_pesan']  = $key['id_pesan'];
            $d['id_pesan_detail']  = $key['id_pesan_detail'];
            $d['admin_id']  = $key['admin_id'];
            $d['user_id']  = $key['user_id'];
            $d['message']  = $key['message'];
            $d['date_created']  = strtotime($key['date_created']);
            $d['pesan_dari']  = $key['pesan_Dari'];

            array_push($arrData, $d);
        }

            $json = array('status'=>200, 'message'=>"success", 'data' => $arrData);
            echo json_encode($json);

    }
}