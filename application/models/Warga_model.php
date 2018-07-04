<?php 

/**
 * summary
 */
class Warga_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    public function getDataWargaSemua () {
    	$query = $this->db->query("SELECT * FROM warga ");
		return $query->result_array();
    }

}
?>