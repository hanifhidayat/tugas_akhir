<?php 

/**
 * summary
 */
class Penduduk_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {

    }

    public function getDataPendudukSemua () {
    	$query = $this->db->query("SELECT * FROM penduduk");
        return $query->result_array();
    }
}
?>