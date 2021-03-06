<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_history_pelayanan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get historis_pelayanan by id_history
     */
    function get_historis_pelayanan($id_history)
    {
        $historis_pelayanan = $this->db->query("
            SELECT
                *

            FROM
                `user_history_pelayanan`

            WHERE
                `id_history` = ?
        ",array($id_history))->row_array();

        return $historis_pelayanan;
    }
    
    /*
     * Get all user_history_pelayanan count
     */
    function get_all_user_history_pelayanan_count()
    {
        $user_history_pelayanan = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `user_history_pelayanan`
        ")->row_array();

        return $user_history_pelayanan['count'];
    }
        
    /*
     * Get all user_history_pelayanan
     */
    function get_all_user_history_pelayanan($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $user_history_pelayanan = $this->db->query("
            SELECT
                *

            FROM
                `user_history_pelayanan` a 
                join mstlokasipelayanan b on b.lokasipelayanan_id = a.lokasipelayanan_id
                join mstuser c on c.user_id = a.user_id

            WHERE
                1 = 1

            ORDER BY `id_history` DESC

        ")->result_array();

        return $user_history_pelayanan;
    }
        
    /*
     * function to add new historis_pelayanan
     */
    function add_historis_pelayanan($params)
    {
        $this->db->insert('user_history_pelayanan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update historis_pelayanan
     */
    function update_historis_pelayanan($id_history,$params)
    {
        $this->db->where('id_history',$id_history);
        return $this->db->update('user_history_pelayanan',$params);
    }
    
    /*
     * function to delete historis_pelayanan
     */
    function delete_historis_pelayanan($id_history)
    {
        return $this->db->delete('user_history_pelayanan',array('id_history'=>$id_history));
    }
}
