<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_listkecamatan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kecamatan by kecamatan_id
     */
    function get_kecamatan($kecamatan_id)
    {
        $kecamatan = $this->db->query("
            SELECT
                *

            FROM
                `mstkecamatan`

            WHERE
                `kecamatan_id` = ?
        ",array($kecamatan_id))->row_array();

        return $kecamatan;
    }
    
    /*
     * Get all mstkecamatan count
     */
    function get_all_mstkecamatan_count()
    {
        $mstkecamatan = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `mstkecamatan`
        ")->row_array();

        return $mstkecamatan['count'];
    }
        
    /*
     * Get all mstkecamatan
     */
    function get_all_mstkecamatan($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $mstkecamatan = $this->db->query("
            SELECT
                *

            FROM
                `mstkecamatan`

            WHERE
                1 = 1

            ORDER BY `kecamatan_id` asc

        ")->result_array();

        return $mstkecamatan;
    }
        
    /*
     * function to add new kecamatan
     */
    function add_kecamatan($params)
    {
        $this->db->insert('mstkecamatan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kecamatan
     */
    function update_kecamatan($kecamatan_id,$params)
    {
        $this->db->where('kecamatan_id',$kecamatan_id);
        return $this->db->update('mstkecamatan',$params);
    }
    
    /*
     * function to delete kecamatan
     */
    function delete_kecamatan($kecamatan_id)
    {
        return $this->db->delete('mstkecamatan',array('kecamatan_id'=>$kecamatan_id));
    }
}