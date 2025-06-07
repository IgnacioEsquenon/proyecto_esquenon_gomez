<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuariosModel;

class LoginController extends BaseController{

    public function auth(){

        $session = session();
        $model = new UsuariosModel();

        $mail = $this->request->getVar('mail');
        $password = $this->request->getVar('pass');

        $data = $model->where('mail', $mail)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);

            if($verify_pass){
                $ses_data = [
                    'id' => $data['id'],
                    'apellido' => $data['apellido'],
                    'nombre' => $data['nombre'],
                    'mail' => $data['mail'],
                    'perfil_id' => $data['perfil_id'],
                    'estado' => TRUE,
                ];

                $session->set($ses_data);
                
                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('principal');
            }else{
                $session->setFlashdata('msg', 'Contraseña Incorrecta.');
                return redirect()->to('inicio_sesion');
            }
        }else{
            $session->setFlashdata('msg', 'Email Inválido o Incorrecto');
            return redirect()->to('inicio_sesion');
            
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('inicio_sesion');
    }
}