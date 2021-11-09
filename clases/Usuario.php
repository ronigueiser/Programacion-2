<?php

class Usuario
{
    /**
     * @var int
     */
    protected $usuario_id;
    /**
     * @var string
     */
    protected $email;


    public function traerPorEmail(string $email): ?Usuario{

        $db = (new Conexion()) ->getConexion();
        $query = "SELECT * FROM usuarios
                   WHERE email = ?";
        $stmt  = $db->prepare($query);
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $usuario = $stmt->fetch();

        if(!$usuario){
            return null;
        }
        return $usuario;
    }


    /**
     * @var string
     */
    protected $password;


    /**
     * @var int
     */
    protected $rol_fk;

    /**
     *
     * @return int
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param int $usuario_id
     */
    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(){
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password){
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getRolFk(){
        return $this->rol_fk;
    }

    /**
     * @param int $rol_fk
     */
    public function setRolFk($rol_fk)
    {
        $this->rol_fk = $rol_fk;
    }


}