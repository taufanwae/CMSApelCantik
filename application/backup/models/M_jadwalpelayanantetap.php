<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_jadwalpelayanantetap extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get info_jadwal_pelayanan_tetap by info_jadwal_id
     */
    function get_info_jadwal_pelayanan_tetap($info_jadwal_id)
    {
        $info_jadwal_pelayanan_tetap = $this->db->query("
            SELECT
                *

            FROM
                `info_jadwalpelayanantetap`

            WHERE
                `info_jadwal_id` = ?
        ",array($info_jadwal_id))->row_array();

        return $info_jadwal_pelayanan_tetap;
    }
    
    /*
     * Get all info_jadwalpelayanantetap count
     */
    function get_all_info_jadwalpelayanantetap_count()
    {
        $info_jadwalpelayanantetap = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `info_jadwalpelayanantetap`
        ")->row_array();

        return $info_jadwalpelayanantetap['count'];
    }
        
    /*
     * Get all info_jadwalpelayanantetap
     */
    function get_all_info_jadwalpelayanantetap($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $info_jadwalpelayanantetap = $this->db->query("
            SELECT
                *

            FROM
                `info_jadwalpelayanantetap` a 
                join mstlokasipelayanan b on b.lokasipelayanan_id = a.lokasipelayanan_id

            WHERE
                1 = 1

            ORDER BY `info_jadwal_id` DESC

        ")->result_array();

        return $info_jadwalpelayanantetap;
    }
        
    /*
     * function to add new info_jadwal_pelayanan_tetap
     */
    function add_info_jadwal_pelayanan_tetap($params)
    {
        $this->db->insert('info_jadwalpelayanantetap',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update info_jadwal_pelayanan_tetap
     */
    function update_info_jadwal_pelayanan_tetap($info_jadwal_id,$params)
    {
        $this->db->where('info_jadwal_id',$info_jadwal_id);
        return $this->db->update('info_jadwalpelayanantetap',$params);
    }
    
    /*
     * function to delete info_jadwal_pelayanan_tetap
     */
    function delete_info_jadwal_pelayanan_tetap($info_jadwal_id)
    {
        return $this->db->delete('info_jadwalpelayanantetap',array('info_jadwal_id'=>$info_jadwal_id));
    }
}
