
<?php
class User extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('user_model');
        }

        public function index(){
            $data['users'] = $this->user_model->get_user();
            $data['title'] = 'User List';
            
            $this->load->view('user/header', $data);  
            $this->load->view('user/index', $data);  
            $this->load->view('user/footer');  
        }

        public function view($username = NULL){
            $data['user_item'] = $this->user_model->get_user($username);
			//echo "<pre>";print_r($data);exit;
            $data['title'] = 'User Detailed';
            
            $this->load->view('user/header', $data); 
            $this->load->view('user/view', $data);
            $this->load->view('user/footer');    
        }

        public function create(){
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'New User';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() === FALSE){
                $this->load->view('user/header', $data);
                $this->load->view('user/create', $data);
                $this->load->view('user/footer');
            }else{
                $this->user_model->set_user();

                $data['title'] = 'Success Page';
                $this->load->view('user/header', $data);
                $this->load->view('user/success');
                $this->load->view('user/footer');
            }
        }

        public function edit($username = NULL){
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['user_item'] = $this->user_model->get_user($username);

            $data['title'] = 'User Update';
            
            //$this->load->view('user/edit', $data);  

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() === FALSE){
                $this->load->view('user/header', $data);
                $this->load->view('user/edit', $data);
                $this->load->view('user/footer');

            }else{
                $this->user_model->update_user();

                $data['title'] = 'Success Page';
                $this->load->view('user/header', $data);
                $this->load->view('user/success');
                $this->load->view('user/footer');
            }
        }

        public function delete($username = NULL){
            $this->user_model->delete_user($username);
            
            $data['title'] = 'Success Page';
            $this->load->view('user/header', $data);
            $this->load->view('user/success');
            $this->load->view('user/footer');
        }
}