<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	function cari_dosen($limit,$offset,$nama)
	{
		$q = $this->db->query("select * from ja_mst_dosen where nama_dosen like '%$nama%' LIMIT $offset,$limit");
		return $q;
	}
	function tot_hal($tabel,$field,$kata)
	{
		$q = $this->db->query("select * from $tabel where $field like '%$kata%'");
		return $q;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */