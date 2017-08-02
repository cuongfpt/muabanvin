<?php
Class Chinhanh_model extends MY_Model
{
 var $table = 'chinhanh`';

  function get_chinhanh(){
        $this->db->order_by('orderNo','ASC');
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }
    }
}

?>