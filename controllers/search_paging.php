<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_paging extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->database();
		$this->load->library(array('pagination','session'));
		$this->load->model('search_model');
	}
	function index()
	{
        $this->load->view('search/depan');
	}
	function cari()
	{
		$page=$this->uri->segment(3);
      	$batas=5;
		if(!$page):
		$offset = 0;
		else:
		$offset = $page;
		endif;	
		
		$data['nama']="";
		$postkata = $this->input->post('nama');
		if(!empty($postkata))
		{
			$data['nama'] = $this->input->post('nama');
			$this->session->set_userdata('pencarian_dosen', $data['nama']);
		} 
		else 
		{
			$data['nama'] = $this->session->userdata('pencarian_dosen');
		}
		$data['nama_dosen'] = $this->search_model->cari_dosen($batas,$offset,$data['nama']);
		$tot_hal = $this->search_model->tot_hal('ja_mst_dosen','nama_dosen',$data['nama']);
		
		$config['base_url'] = base_url() . 'index.php/search_paging/cari/';
        	$config['total_rows'] = $tot_hal->num_rows();
        	$config['per_page'] = $batas;
			$config['uri_segment'] = 3;
	    	$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
       		$this->pagination->initialize($config);
		$data["paginator"] =$this->pagination->create_links();
		
        $this->load->view('search/hasil',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */