<?php

class ProductosCrearValidador
{
    /**
     * @var array -Valido los datos del formulario
     */
    protected $data = [];

    /**
     * @var array - Errores de validación
     */
    protected $errores = [];


    /**
     * ProductosCrearValidador constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function ejecutar(){

            if(empty($this->data['titulo'])){
                $this->errores['titulo'] = 'El titulo no puede estar vacio';
            } else if (strlen($this->data['titulo']) < 3) {
                $this->errores['titulo'] = 'El titulo debe tener al menos 3 caracteres';
            }


            if (empty($this->data['precio'])){
                $this->errores['precio'] = 'El precio no puede estar vacío';
            } else if (!is_numeric($this->data['precio'])){
                $this->errores['precio'] = 'El precio debe ser un número';
            }

            if (empty($this->data['texto'])){
                $this->errores['texto'] = 'El texto no puede estar vacío';
            } else if (strlen($this->data['texto']) > 255) {
                $this->errores['texto'] = 'El texto debe tener maximo 255 caracteres';
            }


    }


    /**
     * @return array
     */
    public function hasErrors(): bool
    {
        return count($this->errores) > 0;
    }

    /**
     * @return array
     */
    public function getErrores() : array{
        return $this->errores;
    }
}