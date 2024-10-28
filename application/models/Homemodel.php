<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model{

        public function add_data($cdata){

        $q= $this->db->insert('register', $cdata);

                if($q){
                 return true;
                }
                else{
                return false;
                }
        }

        public function fromdb_data(){
                $qq= $this->db->order_by('id', 'asc')->get('register');
                if($qq->num_rows()>0){
                   return $qq->result();
                }
                else{
                        return false;
                }

        }

        public function getsingledata($id){

                $this->db->where('id', $id);
               $q3= $this->db->get('register');
                if($q3->num_rows()>0){
                        return $q3->row();
                }
                else{
                        return false;
                }

        }

                public function updateTomodel($cdata,$id){

                $this->db->where('id', $id);
                $q4= $this->db->update('register', $cdata);
                if($q4){
                        return true;
                }
                else{
                        return false;
                }
        
        }

                public function deleteitem($id){

                $this->db->where('id', $id);
                $q5= $this->db->delete('register');
                if($q5){
                        return true;
                }
                else{
                        return false;
                }
        
        }




} 


?>