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
    	$query = $this->db->query("SELECT * FROM warga INNER JOIN admin ON fk_admin=id_admin");
		return $query->result_array();
    }

}
?>