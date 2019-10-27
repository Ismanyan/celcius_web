<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    // Pengecekan login
    public function login_validator($input)
    {   
        $check = $this->db->where('user_name',$input['username'])->or_where('user_email',$input['username'])->get('user');

        // pengecekan username dan password
        if ($check->num_rows()>0) {
            if (password_verify($input['password'], $check->row_array()['user_password'])) {

                // Membuat session ketika login
                $data = array(
                    'user_id' => $check->row_array()['user_id'],
                    'user_name'  => $check->row_array()['user_full_name'],
                    'role'     => $check->row_array()['user_role'],
                    'logged_in' => TRUE,
                    'cover_img' => $check->row_array()['user_img'],
                    'address_id' => $check->row_array()['user_address_id']
                );

                $this->session->set_userdata($data);
                $data['Title'] = "Login Success";
                $data['Type'] = "success";
                $data['Url'] = base_url();
                $data['Desc'] = "Selamat Datang di CELCIUS COFFE";
                $this->load->view('notif/Notif', $data);
            } else {
                $data['Title'] = "Password anda salah !";
                $data['Type'] = "error";
                $data['Url'] = base_url('auth/login');
                $data['Desc'] = "Pastikan password anda benar dan coba kembali";
                $this->load->view('notif/Notif',$data);
            }
        } else {
            $data['Title'] = "Username Salah !";
            $data['Type'] = "error";
            $data['Url'] = base_url('auth/login');
            $data['Desc'] = "Pastikan username / email benar dan coba kembali";
            $this->load->view('notif/Notif', $data);
        }
    }

    // Daftar User Baru
    public function add_user($input)
    {
        $check = $this->db->where('user_name',$input['username'])->or_where('user_email', $input['email'])->get('user');

        if ($check->num_rows()>0) {
            echo "<script>
            alert('User sudah terdaftar !');
            document.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
            </script>";
        } else {
            $data = [
                'user_id' => NULL,
                'user_full_name' => $input['fullname'],
                'user_email' => $input['email'],
                'user_name' => $input['username'],
                'user_password' => password_hash($input['password'], PASSWORD_DEFAULT),
                'user_role' => 0,
                'user_address_id' => uniqid(),
                'user_img' => 'defaultPP.png',
                'user_birth_date' => NULL,
                'user_gender' => NULL
            ];
            $this->db->insert('user',$data);

            echo "<script>
            alert('Pendaftaran berhasil');
            document.location.href = '" . base_url('auth/login') . "';
            </script>";
        }
        
    }

    // Change pass
    public function update_pass($input)
    {
        $check = $this->db->where('user_name', $input['username'])->get('user');

        // pengecekan username dan password
        if ($check->num_rows() > 0) {
            if (password_verify($input['oldpassword'], $check->row_array()['user_password'])) {
                $data = ['user_password'=> password_hash($input['password'], PASSWORD_DEFAULT)];
                $this->db->where('user_id',$this->session->userdata('user_id'));
                $this->db->update('user',$data);

                $data['Title'] = "Ubah Password Success";
                $data['Type'] = "success";
                $data['Url'] = base_url('auth/logout');
                $data['Desc'] = "Silahkan login kembali";
                $this->load->view('notif/Notif', $data);
            } else {
                $data['Title'] = "Password Salah !";
                $data['Type'] = "error";
                $data['Url'] = base_url('user/profile');
                $data['Desc'] = "Pastikan password benar dan coba kembali";
                $this->load->view('notif/Notif', $data);
            }
        } else {
            $data['Title'] = "Username Salah !";
            $data['Type'] = "error";
            $data['Url'] = base_url('user/profile');
            $data['Desc'] = "Pastikan username benar dan coba kembali";
            $this->load->view('notif/Notif', $data);
        }
    }
}
