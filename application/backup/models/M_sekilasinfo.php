<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_sekilasinfo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get news__info by info_id
     */
    function get_news__info($info_id)
    {
        $news__info = $this->db->query("
            SELECT
                *

            FROM
                `mstinfo`

            WHERE
                `info_id` = ?
        ",array($info_id))->row_array();

        return $news__info;
    }
    
    /*
     * Get all mstinfo count
     */
    function get_all_mstinfo_count()
    {
        $mstinfo = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `mstinfo`
        ")->row_array();

        return $mstinfo['count'];
    }
        
    /*
     * Get all mstinfo
     */
    function get_all_mstinfo($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $mstinfo = $this->db->query("
            SELECT
                *, b.full_name

            FROM
                `mstinfo` a 
                join mstadmin b on b.admin_id = a.created_by

            WHERE
                1 = 1

            ORDER BY `info_id` DESC

        ")->result_array();

        return $mstinfo;
    }
        
    /*
     * function to add new news__info
     */
    function add_news__info($params)
    {
        $this->db->insert('mstinfo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update news__info
     */
    function update_news__info($info_id,$params)
    {
        $this->db->where('info_id',$info_id);
        return $this->db->update('mstinfo',$params);
    }
    
    /*
     * function to delete news__info
     */
    function delete_news__info($info_id)
    {
        return $this->db->delete('mstinfo',array('info_id'=>$info_id));
    }
}