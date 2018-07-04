<?php 

/**
 * summary
 */
class Admin_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    public function getDataAdminSemua () {
    	$query = $this->db->query("SELECT * FROM admin INNER JOIN warga ON fk_warga=id_warga");
		return $query->result_array();
    }

}
?>