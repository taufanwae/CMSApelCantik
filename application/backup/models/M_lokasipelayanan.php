 <?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_lokasipelayanan extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get lokasi_pelayanan by lokasipelayanan_id
     */
    function get_lokasi_pelayanan($lokasipelayanan_id)
    {
        $lokasi_pelayanan = $this->db->query("
            SELECT
                *

            FROM
                `mstlokasipelayanan`

            WHERE
                `lokasipelayanan_id` = ?
        ",array($lokasipelayanan_id))->row_array();

        return $lokasi_pelayanan;
    }

     function get_layanan_kb($lokasipelayanan_id)
    {
        $lokasi_pelayanan = $this->db->query("
            SELECT
                *

            FROM
                `lokasidanjeniskb`

            WHERE
                `lokasipelayanan_id` = ?
        ",array($lokasipelayanan_id))->result_array();

        return $lokasi_pelayanan;
    }
    
    /*
     * Get all mstlokasipelayanan count
     */
    function get_all_mstlokasipelayanan_count()
    {
        $mstlokasipelayanan = $this->db->query("
            SELECT
                count(*) as count

            FROM
                `mstlokasipelayanan`
        ")->row_array();

        return $mstlokasipelayanan['count'];
    }
        
    /*
     * Get all mstlokasipelayanan
     */
    function get_all_mstlokasipelayanan($params = array())
    {
        $limit_condition = "";
        if(isset($params) && !empty($params))
            $limit_condition = " LIMIT " . $params['offset'] . "," . $params['limit'];
        
        $mstlokasipelayanan = $this->db->query("
            SELECT
                *

            FROM
                `mstlokasipelayanan` a 
                join mstkecamatan b on b.kecamatan_id = a.kecamatan_id

            WHERE
                1 = 1

            ORDER BY `lokasipelayanan_id` DESC

        ")->result_array();

        return $mstlokasipelayanan;
    }
        
    /*
     * function to add new lokasi_pelayanan
     */
    function add_lokasi_pelayanan($params)
    {
        $this->db->insert('mstlokasipelayanan',$params);
        return $this->db->insert_id();
    }

     function add_layanankb($params)
    {
        $this->db->insert('lokasidanjeniskb',$params);
        return $this->db->insert_id();
    }
    
    
    /*
     * function to update lokasi_pelayanan
     */
    function update_lokasi_pelayanan($lokasipelayanan_id,$params)
    {
        $this->db->where('lokasipelayanan_id',$lokasipelayanan_id);
        return $this->db->update('mstlokasipelayanan',$params);
    }
    
    /*
     * function to delete lokasi_pelayanan
     */
    function delete_lokasi_pelayanan($lokasipelayanan_id)
    {
        return $this->db->delete('mstlokasipelayanan',array('lokasipelayanan_id'=>$lokasipelayanan_id));
    }

    function delete_lokasidanjeniskb($lokasipelayanan_id)
    {
        return $this->db->delete('lokasidanjeniskb',array('lokasipelayanan_id'=>$lokasipelayanan_id));

    }
}
