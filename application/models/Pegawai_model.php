<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function get_pegawai()
	{
		$query = $this->db->get('data_crud');
		return $query->result_array();
	}
}
?>
