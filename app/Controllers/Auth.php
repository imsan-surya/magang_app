<?php namespace App\Controllers;

use App\Models\Model_Auth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
    }

    public function register(){
        $data = [
            'title' => 'Register',
            
        ];
        return view('v_register', $data);
    }

    public function save_register(){
       if($this->validate([
           'nama_depan' => [
               'label' => 'name_depan',
               'rules' => 'required',
               'errors' => [
                'required' => '{field} harus diisi!'
                ]
            ],
           'nama_belakang' => [
               'label' => 'name_belakang',
               'rules' => 'required',
               'errors' => [
                'required' => '{field} harus diisi!'
                ]
            ],
            'email' => [
                'label' => 'email',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'institusi' => [
                'label' => 'institusi',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'no_hp' => [
                'label' => 'Nomor Handphone',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'no_whatsapp' => [
                'label' => 'no_whatsapp',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'tempat_lahir' => [
                'label' => 'tempat_lahir',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'tanggal_lahir' => [
                'label' => 'tanggal_lahir',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'provinsi' => [
                'label' => 'provinsi',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'kab_kota' => [
                'label' => 'kab_kota',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'kecamatan' => [
                'label' => 'kecamatan',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'kelurahan' => [
                'label' => 'kelurahan',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'level' => [
                'label' => 'level',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'total' => [
                'label' => 'total',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'bukti' => [
                'label' => 'bukti',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'alamat' => [
                'label' => 'alamat',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                 'required' => '{field} harus diisi!'
                 ]
            ],
       ])) {
           //jika valid
           $data = [
               'nama_depan' => $this->request->getPost('nama_depan'),
               'nama_belakang' => $this->request->getPost('nama_belakang'),
               'email' => $this->request->getPost('email'),
               'institusi' => $this->request->getPost('institusi'),
               'no_hp' => $this->request->getPost('no_hp'),
               'no_whatsapp' => $this->request->getPost('no_whatsapp'),
               'tempat_lahir' => $this->request->getPost('tempat_lahir'),
               'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
               'provinsi' => $this->request->getPost('provinsi'),
               'kab_kota' => $this->request->getPost('kab_kota'),
               'kecamatan' => $this->request->getPost('kecamatan'),
               'kelurahan' => $this->request->getPost('kelurahan'),
               'level' => $this->request->getPost('level'),
               'bantuan' => $this->request->getPost('bantuan'),
               'paket' => $this->request->getPost('paket'),
               'jumlah' => $this->request->getPost('jumlah'),
               'total' => $this->request->getPost('total'),
               'bukti' => $this->request->getPost('bukti'),
               'catatan' => $this->request->getPost('catatan'),
               'alamat' => $this->request->getPost('alamat'),
               'password' => $this->request->getPost('password'),

               
           ];
           $this->Model_Auth->save_register($data);
           session()->setFlashdata('pesan', 'Register berhasil!');
           return redirect()->to('login');
       } else{
           //jika tidak valid
           session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
           return redirect()->to('register');
        }
        
    }
    

    public function login(){
        $data = [
            'title' => 'Login',
            
        ];
        return view('v_login', $data);
    }
    
    public function cek_login(){
        if($this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi!'
                        ]
                    ],
                    ])) {
                        //jika valid
                        $email = $this->request->getPost('email');
                        $password = $this->request->getPost('password');
                        $cek = $this->Model_Auth->login($email, $password);
                        if($cek){
                            //jika data ditemukan
                            session()->set('log', true);
                            session()->set('nama_depan', $cek['nama_depan']);
                            session()->set('nama_belakang', $cek['nama_belakang']);
                            session()->set('email', $cek['email']);
                            session()->set('level', $cek['level']);
                            session()->set('foto_user', $cek['foto_user']);
                            //login sukses
                            return redirect()->to('/home');
                        }else{
                            //jika tidak cocok  
                            session()->setFlashdata('pesan', 'Login Gagal! Email atau password tidak cocok!');
                            return redirect()->to('login');
                            
                        }
                    } else {
                        //jika tidak valid
                        
                        session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                        return redirect()->to('auth/login');
                    }
                }

                public function logout(){
                    session()->remove('log');
                    session()->remove('nama_user');
                    session()->remove('level');
                    session()->remove('foto_user');
                    session()->setFlashdata('pesan', 'Logout sukses!');
                    return redirect()->to('login');
                }
            }
            