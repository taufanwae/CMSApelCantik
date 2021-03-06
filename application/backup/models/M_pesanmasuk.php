<?php
/* b
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_pesanmasuk extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
  public function view_join_where($table1,$table2,$field,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

  public function view_join($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

     public function view_where_order($table1,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }


    public function view_order($table1,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

     function getLastPesan($id_pesan, $id_reseller,$id_konsumen, $id_pesan_terakhir)
    {
        

        return $this->db->query("
                SELECT * from mst_pesan_detail where id_pesan = '".$id_pesan."' and user_id = '".$id_konsumen."' and id_pesan_detail > ".$id_pesan_terakhir)->result_array();
    }

    function getLastPesanApi($id_pesan,$id_konsumen, $id_pesan_terakhir)
    {
        

        return $this->db->query("
                SELECT * from mst_pesan_detail where id_pesan = '".$id_pesan."' and user_id = '".$id_konsumen."' and id_pesan_detail > ".$id_pesan_terakhir)->result_array();
    }

    public function insert($table,$data){
        return $this->db->insert($table, $data);
    }

 
    public function update($table, $data, $where){
        return $this->db->update($table, $data, $where); 
    }

}
