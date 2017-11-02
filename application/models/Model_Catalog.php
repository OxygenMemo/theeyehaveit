<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Catalog extends CI_Model{
    function getHotBooks(){

    }
    function getNewBooks(){
        $sql="SELECT * FROM Book ORDER BY Book_id LIMIT 10";
        $result=$this->db->query($sql);
        return $result;
    }
    function search($Bookname){

        $sql="SELECT * FROM `Book` WHERE Book_name like ?";
        $data="%".$Bookname."%";
        $bind_data=array($data);
        $result=$this->db->query($sql,$bind_data);
        
       return $result;
    }
    function getDetailBook($id){
        $sql="SELECT * FROM Book WHERE Book_id=?";
        $bind_data=array($id);
        $result=$this->db->query($sql,$bind_data);
        
       return $result;
    }
}