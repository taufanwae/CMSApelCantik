<?php
/* b
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_laporanbulanan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dataperiode by dataperiode_id
     */
    function get_dataperiode($tahun)
    {
        $dataperiode = $this->db->query("
            SELECT
                *

            FROM
                `indikatorbulanan`

            WHERE
                `tahun` = ?
        ",array($tahun))->result_array();

        return $dataperiode;
    }

    function dataDuplikat($kecamatan_id,$idperiode)
    {
        return $this->db->query("select * from mstjumlahkk where kecamatan_id = '".$kecamatan_id."' and idperiode = '".$idperiode."' ");
    }
    
    /*
     * Get all mstdataperiode count
     */
    function get_all_dataperiode_count()
    {
        $mstdataperiode = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `mstperiode`
        ")->row_array();

        return $mstdataperiode['count'];
    }
        
    /*
     * Get all mstdataperiode
     */
    function getlastdatakeluarga($params = array())
    {
       
        
        $mstdataperiode = $this->db->query("
            SELECT * from mstjumlahkk a 
            inner join mstkecamatan b on b.kecamatan_id = a.kecamatan_id
            left join mstperiode c on c.idperiode = a.idperiode
            
            ")->result_array();

        return $mstdataperiode;
    }

    function get_all_periode()
    {
         $mstdataperiode = $this->db->query("
            SELECT * from mstperiode
            order by idperiode desc, tahun desc
            ")->result_array();

        return $mstdataperiode;
    }


    function getFileTahunan()
    {
         $mstdataperiode = $this->db->query("
            SELECT * from mstlaporan where tipe = 'tahunan'
            ");

        return $mstdataperiode;
    }

    function getLastFile($tahun)
    {
         if($tahun != "")
         {
            $mstdataperiode = $this->db->query("
            SELECT * from mstlaporan where tipe = 'bulanan' and tahun = '".$tahun."'
            ");
        }else
        {
            $mstdataperiode = $this->db->query("
            SELECT * from mstlaporan where tipe = 'bulanan' order by tahun desc limit 1
            ");
        }

        return $mstdataperiode;
    }

    function getLaporanBulanan()
    {
         $mstdataperiode = $this->db->query("
            SELECT * from mstlaporan where tipe = 'bulanan' order by tahun asc
            ");

        return $mstdataperiode;
    }

        
    /*
     * function to add new dataperiode
     */
    function add_dataperiode($params)
    {
        $this->db->insert('mstjumlahkk',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dataperiode
     */
    function update_dataperiode($dataperiode_id,$params)
    {
        $this->db->where('idjumlahkk',$dataperiode_id);
        return $this->db->update('mstjumlahkk',$params);
    }
    
    /*
     * function to delete dataperiode
     */
    function delete_dataperiode($dataperiode_id)
    {
        return $this->db->delete('mstjumlahkk',array('idjumlahkk'=>$dataperiode_id));
    }

     function getdatakeluargaperiode($idperiode)
    {
       if($idperiode == "")
       {
            $getLastPeriod = $this->db->query("
            SELECT idperiode from mstperiode
            order by idperiode desc, tahun desc limit 1
            ")->row();
            $idperiode = $getLastPeriod->idperiode;
       }
        
        $mstdataperiode = $this->db->query("
            SELECT * from mstjumlahkk a 
            inner join mstkecamatan b on b.kecamatan_id = a.kecamatan_id
            left join mstperiode c on c.idperiode = a.idperiode
            where a.idperiode = '".$idperiode."'")->result_array();

        return $mstdataperiode;
    }
}
