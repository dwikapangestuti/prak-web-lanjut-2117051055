<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function profile($nama = '', $kelas = '', $npm = ''){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create(){

        $kelasModel = new KelasModel();
        $kelas = $this->kelasModel->getKelas();


        if (session('validation') != null) {
            $validation = session('validation');
        } else {
            $validation = \Config\Services::validation();
        }

         $data = [
            'kelas' => $kelas,
            'validation' => $validation,
            'title' => 'Create User',
         ];

        return view('create_user', $data);
    }

    public function store(){
    
        
        $path = 'assets/uploads/img/' ;

        $foto = $this->request->getFile('foto');
        
        $name = $foto->getRandomName();
        

        if($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        if(!$this->validate([
             'nama' => 'required',
             'npm' => 'required|is_unique[user.npm]',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
        }

        $userModel = new UserModel();
        $kelasModel = new KelasModel();
        

        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $kelas = $this->request->getPost('kelas');

        $data=[
            'nama' => $nama,
            'npm' => $npm,
            'id_kelas' => $kelas
        ];

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' =>$this->request->getVar('kelas'),
            'foto'  => $foto
        ]);

        return redirect()->to('/user/index');

    }
    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];

        return view('profile', $data);
    }

    public function edit($id){
        $user = $this->userModel->getUser($id);
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    public function update($id){
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        $data = [
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];

        if ($foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $foto_path = base_url($path, $name);

                $data['foto'] = $foto_path;
            }
        }

        $result = $this->userModel->updateUser($data, $id);

        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/user'));
    }

    public function destroy($id){
        
        $result = $this->userModel->deleteUser($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
        return redirect()->to(base_url('/user'))->with('success', 'Berhasil Menghapus Data');
    }
}