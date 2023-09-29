<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends MY_Model {
    
    protected $table ='users';

    public function getDefaultValues() {
        return[
            'name'      =>'',
            'email'     =>'',
            'role'      => '',
            'is_active' =>''
        ];
    }

    public function getValidationRules() {
        $validationRules = [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required',
            ],
            [
                'field'  => 'email',
                'label'  => 'E-Mail',
                'rules'  => 'trim|required|valid_email|is_unique[users.email]',
                'errors' => ['is_unique' => 'This %s Has been taken e']
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[6]',
            ],
            [
                'field' => 'password_confirmation',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]',
            ],
        ];
        return $validationRules;
    }

    public function run($input){
        $data = [
          'name' => $input->name,
          'email' => strtolower($input->email),
          'password'=> hashEncrypt($input->password),
          'role' => 'member'   
        ];
        $user = $this->create($data);
        
        $sess_data =[
            'id'        => $user,
            'name'      => $user['name'],
            'email'     => $user['email'],
            'role'      => $user['role'],
            'is_login'  => true
        ];
        $this->session->set_userdata($sess_data);
        return true;
        
    }
}

/* End of file ModelName.php */