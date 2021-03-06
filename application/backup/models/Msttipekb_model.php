<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Msttipekb_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jenis_kb by tipekb_id
     */
    function get_jenis_kb($tipekb_id)
    {
        $jenis_kb = $this->db->query("
            SELECT
                *

            FROM
                `msttipekb`

            WHERE
                `tipekb_id` = ?
        ",array($tipekb_id))->row_array();

        return $jenis_kb;
    }
    
    /*
     * Get all msttipekb count
     */
    function get_all_msttipekb_count()
    {
        $msttipekb = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `msttipekb`
        ")->row_array();

        return $msttipekb['count'];
    }
        
    /*
     * Get all msttipekb
     */
    function get_all_msttipekb($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $msttipekb = $this->db->query("
            SELECT
                *

            FROM
                `msttipekb`

            WHERE
                1 = 1

            ORDER BY `tipekb_id` DESC

        ")->result_array();

        return $msttipekb;
    }
        
    /*
     * function to add new jenis_kb
     */
    function add_jenis_kb($params)
    {
        $this->db->insert('msttipekb',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jenis_kb
     */
    function update_jenis_kb($tipekb_id,$params)
    {
        $this->db->where('tipekb_id',$tipekb_id);
        return $this->db->update('msttipekb',$params);
    }
    
    /*
     * function to delete jenis_kb
     */
    function delete_jenis_kb($tipekb_id)
    {
        return $this->db->delete('msttipekb',array('tipekb_id'=>$tipekb_id));
    }
}
