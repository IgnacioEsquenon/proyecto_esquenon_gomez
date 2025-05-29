<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\PerfilModel;

class UsuariosController extends BaseController
{
    public function add_usuario()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules(
            [
                'apellido' => 'required|max_length[50]',
                'nombre' => 'required|max_length[50]',
                'mail' => 'required|max_length[50]|valid_email|is_unique[usuarios.mail]',
                'pass' => 'required|min_length[8]|max_length[200]',
                'repass' => 'required|min_length[8]|max_length[200]|matches[pass]'
            ],
            [   // Errors
                'apellido' => [
                    'required' => 'El nombre es requerido',
                    'max_length' => 'El apellido no debe superar los 50 caracteres como máximo'
                ],
                'nombre' => [
                    'required' => 'El apellido es requerido',
                    'max_length' => 'El nombre no debe superar los 50 caracteres como máximo'
                ],
                'mail' => [
                    'required' => 'El correo electrónico es requerido',
                    'max_length' => 'El correo no debe superar los 50 caracteres como máximo',
                    'valid_email' => 'La dirección de correo debe ser válida',
                    'is_unique' => 'El correo ya se encuentra registrado' 
                ],
                'pass' => [
                    'required' => 'La contraseña es requerida',
                    'min_length' =>'La contraseña debe tener como mínimo 8 caracteres',
                    'max_length' => 'La contraseña no debe superar un máximo 200 caracteres'
                ],
                'repass' => [
                    'required' => 'Repetir la contraseña es requerido',
                    'min_length' =>'La contraseña debe tener como mínimo 8 caracteres',
                    'max_length' => 'La contraseña no debe superar un máximo 200 caracteres',
                    'matches' => 'Las contraseñas deben coincidir'
                ]
            ]
        );

        if ($validation->withRequest($request)->run()) {
            $data = [
                'apellido' => $request->getPost('apellido'),
                'nombre' => $request->getPost('nombre'),
                'mail' => $request->getPost('mail'),
                'password' => password_hash($request->getPost('pass'), PASSWORD_BCRYPT),
                'estado' => 1,
                'perfil_id' => 1
            ];

            $registro = new UsuariosModel();
            $registro->insert($data);

            return redirect()->to('Registro')->with('mensaje', 'Su registro se realizó exitosamente!');
        } else {
            $data['titulo'] = 'Registro';
            $data['validation'] = $validation;
            return view('plantillas/header_view', $data)
                . view('contenido/registro_view.php')
                . view('plantillas/footer_view.php');
        }
    }
}