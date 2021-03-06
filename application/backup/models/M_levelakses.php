<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_levelakses extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get level_akses by level_id
     */
    function get_level_akses($level_id)
    {
        $level_akses = $this->db->query("
            SELECT
                *

            FROM
                `mstlevel_akses`

            WHERE
                `level_id` = ?
        ",array($level_id))->row_array();

        return $level_akses;
    }
    
    /*
     * Get all mstlevel_akses count
     */
    function get_all_mstlevel_akses_count()
    {
        $mstlevel_akses = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `mstlevel_akses`
        ")->row_array();

        return $mstlevel_akses['count'];
    }
        
    /*
     * Get all mstlevel_akses
     */
    function get_all_mstlevel_akses($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $mstlevel_akses = $this->db->query("
            SELECT
                *

            FROM
                `mstlevel_akses`

            WHERE
                1 = 1

            ORDER BY `level_id` DESC

        ")->result_array();

        return $mstlevel_akses;
    }
        
    /*
     * function to add new level_akses
     */
    function add_level_akses($params)
    {
        $this->db->insert('mstlevel_akses',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update level_akses
     */
    function update_level_akses($level_id,$params)
    {
        $this->db->where('level_id',$level_id);
        return $this->db->update('mstlevel_akses',$params);
    }
    
    /*
     * function to delete level_akses
     */
    function delete_level_akses($level_id)
    {
        return $this->db->delete('mstlevel_akses',array('level_id'=>$level_id));
    }
}
