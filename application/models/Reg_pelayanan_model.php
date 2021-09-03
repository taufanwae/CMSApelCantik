 <?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Reg_pelayanan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get list_user_register_pelayanan by id_reg_pelayanan
     */
    function get_list_user_register_pelayanan($id_reg_pelayanan)
    {
        $list_user_register_pelayanan = $this->db->query("
            SELECT
                *

            FROM
                `reg_pelayanan`

            WHERE
                `id_reg_pelayanan` = ?
        ",array($id_reg_pelayanan))->row_array();

        return $list_user_register_pelayanan;
    }
    
    /*
     * Get all reg_pelayanan count
     */
    function get_all_reg_pelayanan_count()
    {
        $reg_pelayanan = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `reg_pelayanan`
        ")->row_array();

        return $reg_pelayanan['count'];
    }
        
    /*
     * Get all reg_pelayanan
     */
    function get_all_reg_pelayanan($params = array())
    {
        $where_condition = "";

       if(count($params) > 0)
        {
            if($params['level_akses'] == "7")
            {
                $lokasipelayanan_id = $params['lokasipelayanan_id'];
                $where_condition = " and a.lokasipelayanan_id = '".$lokasipelayanan_id."'";
            }
        }
        
        $reg_pelayanan = $this->db->query("
            SELECT a.user_id, nama_pelayanan,id_reg_pelayanan,status_pendaftaran,no_pendaftaran,
                full_name,a.no_ktp,nama_lengkap,alamat,a.email,no_bpjs,no_telp,iva_test, register_date
                ,nama_tipe,nama_lokasi

            FROM
                `reg_pelayanan` a
            JOIN mstjenispelayanan b ON b.id_pelayanan = a.id_pelayanan
            JOIN mstuser c ON c.user_id = a.user_id
            JOIN mstlokasipelayanan d ON d.lokasipelayanan_id = a.lokasipelayanan_id
            JOIN msttipekb e ON e.tipekb_id = a.tipe_kb
            WHERE
                1 = 1 ".$where_condition."

            ORDER BY a.status_pendaftaran ASC

        ")->result_array();

        return $reg_pelayanan;
    }
        
    /*
     * function to add new list_user_register_pelayanan
     */
    function add_list_user_register_pelayanan($params)
    {
        $this->db->insert('reg_pelayanan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update list_user_register_pelayanan
     */
    function update_list_user_register_pelayanan($id_reg_pelayanan,$params)
    {
        $this->db->where('id_reg_pelayanan',$id_reg_pelayanan);
        return $this->db->update('reg_pelayanan',$params);
    }
    
    /*
     * function to delete list_user_register_pelayanan
     */
    function delete_list_user_register_pelayanan($id_reg_pelayanan)
    {
        return $this->db->delete('reg_pelayanan',array('id_reg_pelayanan'=>$id_reg_pelayanan));
    }

    function getTokenFcm($user_id)
    {
        $qry = "SELECT token_fcm from mstuser where user_id = '".$user_id."'";
        return $this->db->query($qry);
    }
}
