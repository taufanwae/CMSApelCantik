<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class ApiAuth extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_api','model');
        if(count($this->input->post()) < 1)
        {
            $json = array('status'=>404, 'message'=>"no request data");
            echo json_encode($json);
            die;
        }
        
    }

    function index()
    {
        echo "on";
    }

    function registerUser()
    {
        
        $noKtp          = secure_input($this->input->post('noKtp'));
        $noHp           = secure_input($this->input->post('noHp'));
        $namaLengkap    = secure_input($this->input->post('namaLengkap'));
        $alamatEmail    = secure_input($this->input->post('alamatEmail'));

        $tglLahir    = secure_input($this->input->post('tglLahir'));
        $kecamatan_id    = secure_input($this->input->post('kecamatan'));
        $desa_id   = secure_input($this->input->post('desa'));
        $alamat_detail   = secure_input($this->input->post('alamat_detail'));

        $checkEmail = $this->model->checkUserReg('email',$alamatEmail);
        $checkNoKtp = $this->model->checkUserReg('no_ktp',$noKtp);
        $checkNoHp = $this->model->checkUserReg('no_hp',$noHp);


			
        if($checkEmail > 0)
        {
            $json = array('status'=>201, 'message'=>"Email anda sudah terdaftar");
        }else if($checkNoHp > 0)
        {
            $json = array('status'=>201, 'message'=>"Nomor HP anda sudah terdaftar");
        }else if($checkNoKtp > 0)
        {
            $json = array('status'=>201, 'message'=>"nomor KTP anda sudah terdaftar");

        }else 
        {
            $dataInsert = array(
                    'email' => $alamatEmail,
                    'no_ktp' => $noKtp,
                    'no_hp' => $noHp,
                    'full_name' => $namaLengkap,
                    'reg_status' => '0',
                    'created_at' => date('Y-m-d H:i:s'),
                    'tgl_lahir'		=> date('Y-m-d',strtotime($tglLahir)),
                    'kecamatan_id'	=> $kecamatan_id,
                    'desa_id'	=> $desa_id,
                    'alamat_detail' => $alamat_detail
            );
            $this->model->insertData($dataInsert);
            $json = array('status'=>200, 'message'=>"berhasil registrasi");

        } 
     
        echo json_encode($json);
        
    }

    function VerifyRegisterUser()
    {
        $noKtp          = secure_input($this->input->post('noKtp'));
        $noHp           = secure_input($this->input->post('noHp'));
        $pin           = secure_input($this->input->post('pin'));
        $pin = md5($pin);
        $checkNoKtp = $this->model->checkUserRegVerify('no_ktp',$noKtp);
        $checkNoHp = $this->model->checkUserRegVerify('no_hp',$noHp);


        if($checkNoHp < 1)
        {
            $json = array('status'=>201, 'message'=>"nomor HP anda belum didaftarkan");
        }else if($checkNoKtp < 1)
        {
            $json = array('status'=>201, 'message'=>"nomor KTP anda belum didaftarkan");

        }else 
        {
            $this->model->activateUser($noHp,$noKtp,$pin);
            $tokenLogin    = md5(date('Ymdhis').$noKtp);
            $this->model->updateData('mstuser', array('token_login' => $tokenLogin), array('no_ktp' => $noKtp));


            $where = array('no_ktp'=> $noKtp);
            $checkNoKtp = $this->model->checkUserActive($where);
            $data       = $checkNoKtp->row();

            $userId     = $data->user_id;
            $fullName   = $data->full_name;
            $tokenLogin   = $data->token_login;

            $json = array(
                'status'=>200, 
                'message'=>"berhasil login",
                'user_id' => $userId,
                'full_name' => $fullName,
                'no_ktp' => $noKtp,
                'tokenLogin'    => $tokenLogin

            );

        } 
     
        echo json_encode($json);
    }

    function checkLogin()
    {
         $noKtp          = secure_input($this->input->post('noKtp'));
        $where = array('no_ktp'=> $noKtp);
        $checkNoKtp = $this->model->checkUserActive(array('no_ktp' =>$noKtp ));


       if($checkNoKtp->num_rows() < 1)
        {
            $json = array('status'=>201, 'message'=>"nomor KTP anda tidak terdaftar / akun tidak aktif");

        }else 
        {
            $data       = $checkNoKtp->row();
            $no_hp     = $data->no_hp;
            $tokenLogin    = md5(date('Ymdhis').$noKtp);
            $this->model->updateData('mstuser', array('token_login' => $tokenLogin), array('no_ktp' => $noKtp));
           

            $json = array(
                'status'        =>200, 
                'message'       =>"berhasil verify login",
                'no_hp'         => $no_hp,
                'tokenLogin'    => $tokenLogin

            );

        } 
     
        echo json_encode($json);

    }

     function login()
    {
         $noKtp          = secure_input($this->input->post('noKtp'));
         $pin          = secure_input($this->input->post('pin'));
         $tokenLogin          = secure_input($this->input->post('tokenLogin'));
         $pin = md5($pin);

        $where = array('no_ktp'=> $noKtp, 'pin'=>$pin);
        $checkNoKtp = $this->model->checkUserActive($where,$tokenLogin);

       if($checkNoKtp->num_rows() < 1)
        {
            $json = array('status'=>201, 'message'=>"PIN salah");

        }else 
        {
            $data       = $checkNoKtp->row();
            $userId     = $data->user_id;
            $fullName   = $data->full_name;
            $tokenLogin   = $data->token_login;

            $json = array(
                'status'=>200, 
                'message'=>"berhasil login",
                'user_id' => $userId,
                'full_name' => $fullName,
                'no_ktp' => $noKtp,
                'tokenLogin'    => $tokenLogin

            );

        } 
     
        echo json_encode($json);
    }

     function getDataKecamatanDesa()
    {
         $tipe          = secure_input($this->input->post('tipe'));
         $nama_kecamatan          = secure_input($this->input->post('nama_kecamatan'));
         $dataArray = array();

         if($tipe == "kecamatan")
         {
         	$table = "mstkecamatan";
         	$data = $this->model->select($table);

         	foreach ($data->result_array() as $key) {
         		$d['kecamatan_id'] = $key['kecamatan_id'];
         		$d['nama_kecamatan'] = $key['nama_kecamatan'];
         		array_push($dataArray, $d);
         	}
        	$json = array('status'=>200, 'message'=>"Berhasil", 'dataKecamatan' => $dataArray);
         }else
         {
         	$table = "mstdesa";
         	$where = array('nama_kecamatan' => $nama_kecamatan);
         	$getKcamatanId = $this->model->selectWhere('mstkecamatan',$where)->row();
         	$kecamatanId = $getKcamatanId->kecamatan_id;


         	$where2 = array('kecamatan_id' => $kecamatanId);
         	$getData = $this->model->selectWhere('mstdesa',$where2);


         	foreach ($getData->result_array() as $key) {
         		$d['desa_id'] = $key['desa_id'];
         		$d['nama_desa'] = $key['nama_desa'];
         		array_push($dataArray, $d);
         	}
        	
        	$json = array('status'=>200, 'message'=>"Berhasil", 'dataDesa' => $dataArray);
         }
        
       
     
        echo json_encode($json);
    }

    function forgotPin()
    {

        $noKtp          = secure_input($this->input->post('noKtp'));
                $where = array('no_ktp'=> $noKtp);
        $checkNoKtp = $this->model->checkUserActive($where);

       	if($checkNoKtp->num_rows() < 1)
        {
            $json = array('status'=>201, 'message'=>"User tidak ditemukan");

        }else 
        {
        	$otp_code = rand(100000,999999);

            $this->model->updateData('mstuser', array('otp_code' => $otp_code, 'otp_request_date' => date('Y-m-d H:i:s')), array('no_ktp' => $noKtp));

             $where = array('no_ktp'=> $noKtp);
        	$checkNoKtp = $this->model->checkUserActive($where);

        	$data       = $checkNoKtp->row();
            $email     = $data->email;


          $config['mailtype'] = 'text';
          $config['protocol'] = 'smtp';
          $config['smtp_host'] = 'mail.taufanh.my.id';
          $config['smtp_user'] = 'support@taufanh.my.id';
          $config['smtp_pass'] = 'Unikujaya28';
          $config['smtp_port'] = 587;
          $config['newline'] = "\r\n";

          $this->load->library('email', $config);

          $this->email->from('support@taufanh.my.id', 'Kode OTP Lupa PIN');
          $this->email->to($email);
          $this->email->subject('ApelCantik - Kode OTP Lupa PIN');
          $this->email->message("Anda telah melakukan permintaan lupa PIN pada aplikasi ApelCantik, masukan kode berikut : ".$otp_code." kode berlaku 5 menit. \r\nAbaikan email ini jika anda tidak melakukan permintaan lupa PIN");

          $this->email->send();
            
            $json = array('status'=>200, 
            	'message'=>"Kode OTP 6 digit sudah terkirim ke email terdaftar, mohon cek pesan masuk di email. kode berlaku 5 menit");

        }
        echo json_encode($json);
    }


    function verifyForgotPin()
    {

        $noKtp         = secure_input($this->input->post('noKtp'));
        $otp_code      = secure_input($this->input->post('otp_code'));
                
        $where 			= array('no_ktp'=> $noKtp,'otp_code'=> $otp_code);
        $checkNoKtp 	= $this->model->checkUserActive($where);

       	if($checkNoKtp->num_rows() < 1)
        {
            $json = array('status'=>201, 'message'=>"Kode OTP salah");

        }else 
        {
        	$json = array('status'=>200, 'message'=>"sukses");
        }
        echo json_encode($json);
    }

    function changePin()
    {

        $noKtp         = secure_input($this->input->post('noKtp'));
        $otp_code      = secure_input($this->input->post('otp_code'));
        $pin           = secure_input($this->input->post('pin'));
        $pin 		= md5($pin);
                
        $where 			= array('no_ktp'=> $noKtp,'otp_code'=> $otp_code);
        $checkNoKtp 	= $this->model->checkUserActive($where);

       	if($checkNoKtp->num_rows() < 1)
        {
            $json = array('status'=>201, 'message'=>"Kode OTP salah");

        }else 
        {

            $this->model->updateData('mstuser', array('pin' => $pin), array('no_ktp' => $noKtp));
        	$json = array('status'=>200, 'message'=>"sukses");
        }
        echo json_encode($json);
    }
}
