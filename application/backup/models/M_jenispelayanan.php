 <?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_jenispelayanan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jenis_pelayanan by id_pelayanan
     */
    function get_jenis_pelayanan($id_pelayanan)
    {
        $jenis_pelayanan = $this->db->query("
            SELECT
                *

            FROM
                `mstjenispelayanan`

            WHERE
                `id_pelayanan` = ?
        ",array($id_pelayanan))->row_array();

        return $jenis_pelayanan;
    }
    
    /*
     * Get all jenis_pelayanan count
     */
    function get_all_jenis_pelayanan_count()
    {
        $jenis_pelayanan = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `mstjenispelayanan`
        ")->row_array();

        return $jenis_pelayanan['count'];
    }
        
    /*
     * Get all jenis_pelayanan
     */
    function get_all_jenis_pelayanan($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $jenis_pelayanan = $this->db->query("
            SELECT
                *,b.full_name

            FROM
                `mstjenispelayanan` a 
                join mstadmin b on b.admin_id = a.created_by

            WHERE
                1 = 1

            ORDER BY `id_pelayanan` DESC

        ")->result_array();

        return $jenis_pelayanan;
    }
        
    /*
     * function to add new jenis_pelayanan
     */
    function add_jenis_pelayanan($params)
    {
        $this->db->insert('mstjenispelayanan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jenis_pelayanan
     */
    function update_jenis_pelayanan($id_pelayanan,$params)
    {
        $this->db->where('id_pelayanan',$id_pelayanan);
        return $this->db->update('mstjenispelayanan',$params);
    }
    
    /*
     * function to delete jenis_pelayanan
     */
    function delete_jenis_pelayanan($id_pelayanan)
    {
        return $this->db->delete('mstjenispelayanan',array('id_pelayanan'=>$id_pelayanan));
    }
}
