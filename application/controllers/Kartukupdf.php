<?php
class Kartukupdf extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('m_api','model');
    }
 
    public function pdf($userId = "", $tokenLogin = "")
    {

        $user_id          = secure_input($userId);
        $tokenLogin     = secure_input($tokenLogin);

     
        $checkNoKtp = $this->model->checkUserActive(array('user_id'=>$user_id),$tokenLogin);

       if($checkNoKtp->num_rows() < 1)
        {
            $json = array('status'=>201, 'message'=>"data anda tidak terdaftar / akun tidak aktif");
            echo json_encode($json); die;

        }
        $getDataUser = $this->model->getDataUser($user_id);
        $getData    = $getDataUser->row();
        $nama       = strtoupper($getData->full_name);
        $alamat     = $getData->alamat_detail;
        $desa       = $getData->nama_desa;
        $kecamatan  = $getData->nama_kecamatan;
        $noKtp      = $getData->no_ktp;
        $tgllahir   = $getData->tgl_lahir;
        $linkimage  = base_url()."upload/fotoakun/".$getData->link_image;
        $tgllahir = $this->getDateIndo(date('Y-m-d',strtotime($tgllahir)));

        $getDataReg = $this->model->selectWhere('reg_pelayanan',array('user_id' => $user_id))->row();
        $tglReg = $this->getDateIndo(date('Y-m-d',strtotime($getDataReg->register_date)));



        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->AddPage('P', 'A4');
        $pdf->SetFont('');
        $pdf->SetMargins(8, 0, 8);
        $pdf->SetFont('helvetica', '', 8, '', true);

        $img_file = K_PATH_IMAGES.'base_kartuku.png';
        $pdf->Image($img_file, 5, 5, 90,50, '', '', '', false, 300, '', false, false, 0);
       

$html='<table border="0">
<tr>
<td colspan="3"><b>'.$nama.'</b></td>
</tr>
<tr>
<td width="35%">Tgl Registrasi</td>
<td width="2%">:</td>
<td width="63%">'.$tglReg.'</td>
</tr>
<tr>
<td width="35%">No KTP</td>
<td width="2%">:</td>
<td width="63%">'.$noKtp.'</td>
</tr>
<tr>
<td width="35%">Tanggal Lahir</td>
<td width="2%">:</td>
<td width="63%">'.$tgllahir.'</td>
</tr>
<tr>
<td width="35%">Alamat</td>
<td width="2%">:</td>
<td width="63%">'.$alamat.' '.$desa.', <br/>Kec. '.$kecamatan.'</td>
</tr>
</table>';


        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(65, 40, 30, 23, $html, 0, 1, 0, true, '', true);
       // $linkFile = "https://taufanh.my.id/upload/fotoakun/IMG_AKUN_14.png";
        $pdf->Image($linkimage, 8, 23, 20,25, '', '', '', false, 300, '', false, false, 0);

        // $linkFile2 = "https://taufanh.my.id/images/belakang_kartuku.png";
        // $pdf->Image($linkFile2, 100, 5, 90,50, '', '', '', false, 300, '', false, false, 0);
        $pdf->Output('kartuku.pdf', 'I');
    }

    function getDateIndo($date)
    {
        $expl = explode('-', $date);

        $tgl = $expl['2'];
        $bulan = $expl['1'];
        $thn = $expl['0'];

        switch ($bulan) {
            case '01': $bulan = "Januari"; break;
            case '02': $bulan = "Februari"; break;
            case '03': $bulan = "Maret"; break;
            case '04': $bulan = "April"; break;
            case '05': $bulan = "Mei"; break;
            case '06': $bulan = "Juni"; break;
            case '07': $bulan = "Juli"; break;
            case '08': $bulan = "Agustus"; break;
            case '09': $bulan = "September"; break;
            case '10': $bulan = "Oktober"; break;
            case '11': $bulan = "November"; break;
            case '12': $bulan = "Desember"; break;
        }

        return $tgl." ".$bulan." ".$thn;
    }
 
}