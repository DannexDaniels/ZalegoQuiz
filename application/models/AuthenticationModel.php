<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/9/18
 * Time: 7:17 PM
 */

class AuthenticationModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertUser($data){
        //inserting data into the table user
        $this->db->insert('users',$data);
    }

    function insertProf($data){
        //inserting data into the table user
        $this->db->insert('professionals',$data);
    }

    function insertAuth($data){
        $this->db->insert('auth',$data);
    }

    function getUsers(){
        $query = $this->db->get('users');
        return $query->result_array();
    }

    function getPassword($uname){
        $query = $this->db->get_where('users',array('username' => $uname));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

    function getUserType($email){
        $query = $this->db->get_where('auth',array('recovery_email' => $email));
        return $query->row()->type;
    }
    function getUser($email){
        $query = $this->db->get_where('user',array('email'=> $email));
        return $query->row_array();
    }

    function getUserName($id){
        $query = $this->db->get_where('auth',array('userId'=> $id));
        return $query->row()->name;
    }

    function getProf($email){
        $query = $this->db->get_where('profs',array('email'=> $email));
        return $query->row_array();
    }

    function getUserId($email){
        $query = $this->db->get_where('auth',array('recovery_email'=> $email));
        return $query->row()->userId;
    }

}

?>