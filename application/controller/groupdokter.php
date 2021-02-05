<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class groupdokter extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('groupdokter_model');
    }

    public function index()
    {
      $this->load->view('header');
      $this->load->view('menu');
      $this->load->view('daftardokter');
      $this->load->view('footer');
    }
    
    public function add()
    {
      if (!isset($_POST))
        show_404();
        
        $this->groupdokter_model->add();
            redirect('groupdokter');   
    }
}


