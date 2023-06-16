<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Laundry extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('M_Laundry');
    }
    
    public function index()
    {
        $this->load->view('landingpage');
        
    }
    public function lp()
    {
        $this->load->view('landingpage');
        
    }
    public function check_logins()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        
        $user = $this->db->get_where('register',['username' => $username]);

        if($user->num_rows() > 0)
        {
            $hasil = $user->row();
            if(password_verify($password, $hasil->password))
            {
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                    'Role' => "User"
                    );
     
                $this->session->set_userdata($data_session);
                redirect('C_Laundry/dashboarduser');
            }else {
                $this->session->set_flashdata('msg', 'Wrong');
                redirect('C_Laundry/loginsalah');
                
            }
        }elseif($user->num_rows() > 0)
        {
            $hasil = $user->row();
            if(password_verify($password, $hasil->password))
            {
                $data_session = array(
                    'nama' => $username,
                    'status' => "login",
                    'Role' => "Admin"
                    );
     
                $this->session->set_userdata($data_session);
                redirect('C_Laundry/dashboard');
            }else {
                $this->session->set_flashdata('msg', 'Wrong');
                redirect('C_Laundry/loginsalah');
                
            }
        }
        else {
            $this->session->set_flashdata('msg', 'Wrong');
            redirect('C_Laundry/loginsalah');
            
        }
        
    }
    public function check_login()
    {   
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        

        $user = $this->db->get_where('register', ['username' => $username])->row_array();
        if($user == null){    
            $this->load->view('loginlaundry');       
        }   
        $this_username = $user['username']; 
        $this_password = $user['password'];
        $role = $user['role']; 
        $thisnama = $user['nama'];

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $thisnama
        );
        
         if($this_password != $password){    
             redirect('C_Laundry/loginsalah');       
         }
         
         
            if($username ==  $this_username && $password == $this_password){
             if($role == 'adm'){
                 $this->session->set_userdata($data);
                 redirect('C_Laundry/dashboard');
             }else{
                 $this->session->set_userdata($data);
                 redirect('C_Laundry/dashboarduser');
             }
         }else{
            redirect('C_Laundry/loginsalah'); 
         }
        
    }
    public function loginsalah()
    {
        $this->load->view('loginsalah');
    }
    public function login()
    {
        $this->load->view('loginlaundry');
    }
    public function deletepesanan($id_pemesanan)
    {
        $data['Laundry'] = $this->M_Laundry->deletePesanan($id_pemesanan);
        redirect('C_Laundry/tblpenjualan');
    }
    public function delete($id_user)
    {
        $data['Laundry'] = $this->M_Laundry->deleteUser($id_user);
        redirect('C_Laundry/tbluser');
    }
//  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
//                                              Dashboard User 
// /////////////////////////////////////////////////////////////////////////////////////////////////////-->
    public function dashboarduser()
    {
        $data['Laundry']= $this->M_Laundry->getPemesanan();
        $nama = $this->session->userdata('nama');
        $data['nama'] = $this->M_Laundry->selectself($nama);
        $this->load->view('dashboard/dashboarduser',$data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sbaruser');
    }
    public function pembayaran()
    {
        $this->load->view('dashboard/pembayaran');
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sbaruser'); 
        
    }
   
    public function riwayatpembelian()
    {
        
        $data['Laundry']= $this->M_Laundry->getPemesananself();
        $this->load->view('dashboard/riwayatlaundry',$data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sbaruser'); 
        
    }
    public function hitungself() {
        $nama = $this->session->userdata('usr');
        $this->M_Laundry->selectself($nama);
        }
    //  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
//                                              Dashboard Admin 
// /////////////////////////////////////////////////////////////////////////////////////////////////////-->
    public function dashboard()     
    {
        $data['Laundry']= $this->M_Laundry->getPemesanan();
        $this->load->view('dashboard/dashboard',$data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar');
    }
    public function pemesanan()
    {
        $this->load->view('dashboard/pemesanan');
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar'); 
    }
    public function tbluser()
    {
        $data['Laundry'] = $this->M_Laundry->getUser();
        $this->load->view('dashboard/tbluser',$data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar'); 
    }
    public function tblpenjualan()
    {
        $data['Laundry'] = $this->M_Laundry->getPemesanan();
        $this->load->view('dashboard/tblpenjualan',$data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar'); 
    }
    public function registeruser()
    {
        $this->load->view('dashboard/registeruser');
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar'); 
    }
    public function getUser()
    {
        $data['Laundry']= $this->M_Laundry->getUser();
        $this->load->view('dashboard/tbluser', $data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar'); 
    }
    public function getPemesanan()
    {
        $data['Laundry']= $this->M_Laundry->getPemesanan();
        $this->load->view('dashboard/tblpenjualan', $data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar');
    }
    
    public function inputPemesanan()
    {
        $data['Laundry']= $this->M_Laundry->getPemesanan();
        
        $this->load->view('dashboard/pemesanan', $data);
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar');
    }
    public function pendapatan()
    {
        
    }
    public function adduser()
    {
       
        $rules = $this->M_Laundry->validation();
        $this->form_validation->set_rules($rules);
        
        if ($this->form_validation->run() == FALSE) {
            redirect('C_Laundry/registeruser');

        }else{
        $this->M_Laundry->insertUser();
        redirect('C_Laundry/registeruser');
        
        }
    }   
    public function addpesanan()
    {
        
        $this->M_Laundry->insertPesanan();
        redirect('C_Laundry/pemesanan');
        
    }
    
    public function ubah($id_user)
    {
        $data['Laundry']=$this->M_Laundry->getDetailUser($id_user);
        $this->load->view('dashboard/edituser',$data);   
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar');
    }
    public function formedituser()
    {
        $this->M_Laundry->editUser();
        redirect('C_Laundry/dashboard');
    }
    public function edit2()
     {
    $data['Laundry'] = $this->M_Laundry->getUser();
    $this->load->view('dashboard', $data);
    }
    public function edituser()
    {
        
        $this->M_Laundry->editUser();
        redirect('C_Laundry/registeruser');
        
    }
    public function editpesanan()
    {
        
        $this->M_Laundry->editpesanan();
        redirect('C_Laundry/pemesanan');
        
    }
    public function ubahpesanan($id_pemesanan)
    {
        $data['Laundry']=$this->M_Laundry->getDetailPesanan($id_pemesanan);
        $this->load->view('dashboard/editpesanan',$data);   
        $this->load->view('dashboard/footer');
        $this->load->view('dashboard/sidebar');
    }

    public function lunas($id_pemesanan)
    {
        
        $this->M_Laundry->lunas($id_pemesanan);
        redirect('C_Laundry/tblpenjualan','refresh');
    }

    public function tidakLunas($id_pemesanan)
    {
        
        $this->M_Laundry->tidakLunas($id_pemesanan);
        redirect('C_Laundry/tblpenjualan','refresh');
        
    }
    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('auth');
        }

public function get_id()
  {
    if (!$this->input->is_ajax_request()) :
      show_404();
    else :
      $id_user = $this->M_Laundry->get_id();
      if ($id->num_rows() > 0) :
        $this->result['status'] = true;
        foreach ($id_user->result() as $key => $value) :
          $this->result['data'][$key]['id'] = $value->id_user;
        endforeach;
      endif;

      echo json_encode($this->result);
    endif;
  }

}

/* End of file C_Session.php */

?>