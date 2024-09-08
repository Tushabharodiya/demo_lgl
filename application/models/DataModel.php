<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model {
    function __construct() {
		parent::__construct();
	}

	// ======================================================== //
    /* Common Functions */
    // ======================================================== //
	function insertData($table, $data){
		$result = $this->db->insert($table, $data);
		if($result)
			return $this->db->insert_id();
		else
			return false;
	}
}