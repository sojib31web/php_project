<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller{
  Public$form_validation;
  public $input;
  public$upload;
  public$homemodel;
        public function __construct()
        {
          parent::__construct();
          $this->load->model('homemodel');
          $this->form_validation->set_error_delimiters('<div class="text-danger mt-2 mb-3">', '</div>');
        }

    Public function index(){
     $this->load->view('insertview');
    }
      public function addnew(){

      $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
      $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
      $this->form_validation->set_rules('language', 'Language', 'required|trim');

      if(empty($_FILES['image'] ['name'])){
        $this->form_validation->set_rules('image', 'Image/Document', 'required');
      }

          if($this->form_validation->run()){
            
              $config['upload_path']= './uploads'; 
              $config['allowed_types']='*';

               $this->load->library('upload', $config);
               $this->upload->do_upload('image');
               $cdata=$this->input->post();
               $upfile=$this->upload->data();
               $cdata['image']= $upfile['file_name'];
             
              $check= $this->homemodel->add_data($cdata);
                if($check){
                 redirect('crudcontroller/display_data');
                }
                else{

                }
          }
          else{
           
            $this->load->view('insertview');
          }
      }


              public function display_data($id=''){
                if($id!=''){
                } else{
              $demo['arr'] = $this->homemodel->fromdb_data();
              $this->load->view('afterinsert.php', $demo);
              }
            }

        public function update_data($id){

         $upcdata['singledata']=$this->homemodel->getsingledata($id);
          $this->load->view('upinsert', $upcdata);
        }


        public function afterupdate($id){
          $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
          $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
          $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
          $this->form_validation->set_rules('language', 'Language', 'required|trim');
    
          if(empty($_FILES['image'] ['name'])){
            $this->form_validation->set_rules('image', 'Image/Document', 'required');
          }
              if($this->form_validation->run()){
                
                  $config['upload_path']= './uploads'; 
                  $config['allowed_types']='*';
    
                   $this->load->library('upload', $config);
                   $this->upload->do_upload('image');
                   $cdata=$this->input->post();
                   $upfile=$this->upload->data();
                   $cdata['image']= $upfile['file_name'];
                 
                  $check= $this->homemodel->updateTomodel($cdata,$id);
                    if($check){
                     redirect('crudcontroller/display_data');
                    }
                    else{
    
                    }
              }
              else{
               
                $this->load->view('insertview');
              }
          }
    
            Public function delete_data($id){

              $check=$this->homemodel->deleteitem($id);
              if($check){
                redirect('crudcontroller/display_data');
               }
               else{

               }
          }


};
  

?>