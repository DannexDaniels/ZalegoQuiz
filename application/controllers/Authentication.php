<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/7/18
 * Time: 11:42 AM
 */

class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('authenticationModel');
    }

    public function signUpUser(){
        $this->load->view('template/header.php');
        $this->load->view('sign_up_user.php');
        $this->load->view('template/footer.php');
    }
    public function login(){
        $this->load->view('template/header.php');
        $this->load->view('login.php');
        $this->load->view('template/footer.php');
    }

    public function allUsers(){
        if (isset($_SESSION['name'])){
            $data['list'] = $this->authenticationModel->getUsers();
            $data['user'] = $_SESSION['name'];
            $this->load->view('users',$data);
        }else{
            $this->login();
        }
    }

    public function authenticate(){
        $user = $this->input->post('uname');
        $pass = $this->input->post('password');
        if ($this->authenticationModel->getPassword($user) != null){
            /*$this->session->set_userdata('user_type',$this->authenticationModel->getUserType($user));
            $this->session->set_userdata('current_user_id',$this->authenticationModel->getUserId($user));*/

            $password = $this->authenticationModel->getPassword($user);

            if ($password === $pass){
                $this->session->set_userdata('name', $user);
                redirect(base_url('home'));
            }else{
                echo '<script>alert("Wrong password");</script>';
                $this->login();
            }
        }else{
            echo '<script>alert("User doesn\'t exist");</script>';
            $this->login();
        }
    }

    public function createUser(){
        //setting values for the table column

        if ($this->input->post('password')===$this->input->post('pass-conf')){
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'username' => $this->input->post('uname'),
                'password' => $this->input->post('password')
            );

            $this->authenticationModel->insertUser($data);

            echo '<script>alert("Account has been Created Successfully");</script>';
            $this->login();

        }else{
            echo '<script>alert("Password and Confirm Password should be the same");</script>';
            $this->signUpUser();
        }

    }

    public function logout(){
        session_destroy();

        //loading the login form
        $this->load->view('template/header.php');
        $this->load->view('login.php');
        $this->load->view('template/footer.php');
    }
}

?>