<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Laundry extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function login()
    {
        $username = $_POST['username'];
        $role = $_POST['role'];
        $nama = $_POST['nama'];
        $array = array(
            'username' => $username,
            'role' => $role,
            'nama' => $nama,
            'alamat' => $alamat
        );  
        $this->session->set_userdata($array);
        redirect('C_Session/home');
    }
    public function GetDetailUser($id_user)
    {
        $this->db->where('id_user',$id_user);
        $result = $this->db->get('register');
        return $result;
    }
    public function GetDetailPesanan($id_pemesanan)
    {
        $this->db->where('id_pemesanan',$id_pemesanan);
        $result = $this->db->get('pemesanan');
        return $result;
    }
    public function getUser()
	{
        $result = $this->db->get('register');
        return $result;
	}
    public function dummy_user()
  {
    $this->db->query("TRUNCATE TABLE {$this->register}");
    for ($i = 1; $i <= 10; $i++) {
      $id_user       = $i . $i + rand(3456, 9999);
      $tgl_lahir  = rand(1989, 2020) . '-' . rand(1, 12) . '-' . rand(1, 31);

      if ($i % 2 == 0) {
        $jenkel = 'Laki-Laki';
      } else {
        $jenkel = 'Perempuan';
      }

      $insert = $this->db->query("INSERT INTO {$this->register}
                                  SET id_user = {$id_user},
                                    nama = '{$this->faker->name}',
                                    tempat_lahir = '{$this->faker->state}',
                                    tanggal_lahir = '{$tgl_lahir}',
                                    jenis_kelamin = '{$jenkel}',
                                    alamat = '{$this->faker->address}'");
    }
  }
    public function get_id()
	{
        $this->dummy_user();
        $query  = $this->db->query("SELECT
                                  id_user
                                FROM
                                  {$this->table_siswa}");
        return $query;
	}
    public function get_nama($id_user)
  {
    $query  = $this->db->query("SELECT
                                  *
                                FROM
                                  {$this->register}
                                WHERE
                                  id_user = '{$id_user}'");
    return $query;
  }
    public function getPemesananself()
	{
        $nama = $this->session->userdata('nama');
        
        $konsumen = $this->db->get_where('pemesanan', array('nama' => $nama));
        return $konsumen;
        
         
	}
    public function getPemesanan()
	{
        
        $result = $this->db->get('pemesanan');
        return $result;
	}
    public function total()
	{
        $pendapatan = 0;
        $jumlah = $_POST['total'];
        $pendapatan = $jumlah + $total;
        $berat = $_POST['berat'];
        $total = $berat * 5000;
        $insert = array (
            'berat' => $this->input->post('berat'),
            'total' => $this->input->post('total'),
            'pendapatan' => $this->input->post('pendapatan'),
            'total' => $total,
            'pendapatan' => $pendapatan
        );
        $result = $this->db->insert('pemesanan', $insert);
        return $result;
	}
    public function insertPesanan()
    {
        $preg = 0;
        $preg = 0;
        $pendapatan = $_POST['pendapatan'];
            $berat = $_POST['berat'];
            $reguler = $berat * 5000;
            $setrika = $berat * 3000;
            $jumlah = $_POST['total'];
            $preg = $reguler + $pendapatan;
            $pset = $setrika + $pendapatan;
            
        $jenispaket = $this->input->post('jenispaket');
        if ($jenispaket =="Reguler")
        {
            $insert = array (
                'nama' => $this->input->post('nama'),
                'jenispaket' => $this->input->post('jenispaket'),
                'berat' => $this->input->post('berat'),
                'alamat' => $this->input->post('alamat'),
                'harga' => 5000,
                'date' => date('Y-m-d'),
                'total' => $reguler,
                'status' => $this->input->post('status'),
                'catatan' => $this->input->post('catatan'),
            
                'pendapatan' => $preg
                
                
                
            );
            $result = $this->db->insert('pemesanan', $insert);
            $preg = $reguler + $pendapatan;
            $pset = $setrika + $pendapatan;
            return $result;
        }
        else 
        {
            $insert = array (
                'nama' => $this->input->post('nama'),
                'jenispaket' => $this->input->post('jenispaket'),
                'berat' => $this->input->post('berat'),
                'alamat' => $this->input->post('alamat'),
                'harga' => 3000,
                'date' => date('Y-m-d'),
                'total' => $setrika,
                'status' => $this->input->post('status'),
                'catatan' => $this->input->post('catatan'),
                'pendapatan' => $pset
            );
            
            $result = $this->db->insert('pemesanan', $insert);
            return $result;
        }
       
    }
    public function lunas($id_pemesanan)
    {
        $edit = array (
            'status' => "LUNAS",
        );
        $this->db->where('id_pemesanan', $id_pemesanan);
        $result = $this->db->update('pemesanan', $edit);
        return $result;
    }

    public function tidakLunas($id_pemesanan)
    {
        $edit = array (
            'status' => "BELUM BAYAR",
        );
        $this->db->where('id_pemesanan', $id_pemesanan);
        $result = $this->db->update('pemesanan', $edit);
        return $result;
    }
    public function insertUser()
    {
        $insert = array (
            
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
             'role' => 'usr'
        );
        $result = $this->db->insert('register', $insert);
        return $result;
    }
    public function selectself($nama)
    {
        return $this->db->get_where('register',['nama'=> $nama]);
        
    }
    public function editUser()
    {
        $edit = array (
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email')
        );
        $this->db->where('id_user', $this->input->post('id_user'));
        $result = $this->db->update('register', $edit);
        return $result;
    }
    public function editpesanan()
    {
        $edit = array (
            'nama' => $this->input->post('nama'),
                'jenispaket' => $this->input->post('jenispaket'),
                'berat' => $this->input->post('berat'),
                'alamat' => $this->input->post('alamat'),
                'harga' => "",
                'date' => "",
                'total' => "",
                'status' => $this->input->post('status'),
                'catatan' => $this->input->post('catatan')
        );
        $this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
        $result = $this->db->update('pemesanan', $edit);
        return $result;
    }
    public function deleteBarang($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('user');
        return $result;
    }
    public function edit()
    {
        $rules = $this->M_Barang->validation();
        $this->form_validation->set_rules($rules);
        
        if ($this->form_validation->run() == FALSE) {
            $data['barang']=$this->M_Barang->getDetailBarang($this->input->post('id'));
            $this->load->view('hlm_edit_barang',$data);

        }else{
        $this->M_Barang->editBarang();
        redirect('Barang/getBarang');
        }
    }
    public function deletePesanan($id_pemesanan)
    {
        $this->db->where('id_pemesanan', $id_pemesanan);
        $result = $this->db->delete('pemesanan');
        return $result;
    }
    public function deleteUser($id_user)
    {
        $this->db->where('id_user', $id_user);
        $result = $this->db->delete('register');
        return $result;
    }
    public function delete($id)
    {
        $this->M_Barang->deleteBarang($id);
        redirect('Barang/getBarang');
    }
    public function validation()
    {
        return [
            [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'
        ],
        [
            'field' => 'telp',
            'label' => 'Telepon',
            'rules' => 'required'
        ],
        [
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required'
        ],
        ];
    }
}

/* End of file M_Session.php */

?>