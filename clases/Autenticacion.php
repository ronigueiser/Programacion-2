<?php

class Autenticacion
{

    /**
     * @var Usuario
     */
    protected $usuario;

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function iniciarSesion(string $email, string $password) :bool
    {
        $this->usuario = (new Usuario())->traerPorEmail($email);

        if ($this->usuario === null){
            return false;
        }

        if (!password_verify($password, $this->usuario->getPassword()))
        {
            return false;
        }


        $this->autenticarUsusario($this->usuario);



        return true;
    }

    /**
     * Autentica al usuario en el sistema
     * @param Usuario $usuario
     */
    public function autenticarUsusario(Usuario $usuario)
    {
        $_SESSION['id'] = $usuario->getUsuarioId();


    }


    /**
     * Cierra la sesión del usuario
     *
     */
    public function cerrarSesion()
    {
        unset($_SESSION['id']);
    }

    /**
     * @return bool
     */
    public function estaAutenticado():bool
    {
        return isset($_SESSION['id']);
    }

}