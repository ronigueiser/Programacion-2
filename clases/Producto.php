<?php

/**
 * Clase Producto
 * Representa un producto de la tienda
 *
 *
 */

class Producto
{

    /**
     * @var int
     */
    protected $producto_id;

    /**
     * @var string
     */
    protected $fecha;

    /**
     * @var string
     */
    protected $titulo;

    /**
     * @var string
     */
    protected $precio;

    /**
     * @var string
     */
    protected $imagen;

    /**
     * @var string
     */
    protected $imagen_descripcion;

    /**
     * @var string
     */
    protected $texto;


    /**
     * Esta funcion obtiene todos los productos y los retorna
     *
     * @return Producto[]
     */
    public function todo(): array
    {

        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM productos";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $stmt->fetchAll();


    }

    /**
     * Retorna el producto con el $pk
     * Si no existe, retorna null
     *
     * @param int $pk
     * @return Producto|null
     */
    public function traerPorPk(int $pk): ?Producto
    {
        $db = (new Conexion())->getConexion();
        $query = "SELECT * FROM productos 
                    WHERE producto_id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$pk]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $producto = $stmt->fetch();


        if (!$producto) {
            return null;
        }

        return $producto;
    }


    /**
     * Crea un registro en la base de datos
     * Lanza una PDOExpetion en caso de un error en la consulta
     *
     * @param array $data
     * @throws Exception
     */
    public function crear(array $data){

        $db = (new Conexion())->getConexion();
        $query = "INSERT INTO productos (usuario_fk,fecha, titulo, precio, texto, imagen, imagen_descripcion) 
                    VALUES (:usuario_fk, NOW(), :titulo, :precio, :texto, :imagen, :imagen_descripcion)";
        $stmt = $db->prepare($query);
        $stmt->execute([
            ':usuario_fk' => $data['usuario_fk'],
            ':titulo' => $data['titulo'],
            ':precio' => $data['precio'],
            ':texto' => $data['texto'],
            ':imagen' => $data['imagen'],
            ':imagen_descripcion' => $data['imagen_descripcion'],

        ]);

    }


    /**
     * Elimina un registro en la base de datos.
     *
     * @param int $pk
     *
     */
    public function eliminar(int $pk){

        $db = (new Conexion())->getConexion();
        $query = "DELETE FROM productos WHERE producto_id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$pk]);

    }

    /**
     * Actualiza un registro en la base de datos .
     *
     * @param int $pk
     * @param array $data
     *
     */

    public function editar($pk, array $data){
        $db = (new Conexion())->getConexion();
        $query = "UPDATE productos 
                    SET titulo = :titulo, 
                        precio = :precio, 
                        texto = :texto,
                        imagen = :imagen,
                        imagen_descripcion = :imagen_descripcion 
                    WHERE producto_id = :producto_id";
        $stmt = $db->prepare($query);
        $stmt->execute([
            ':titulo' => $data['titulo'],
            ':precio' => $data['precio'],
            ':texto' => $data['texto'],
            ':imagen' => $data['imagen'],
            ':imagen_descripcion' => $data['imagen_descripcion'],
            ':producto_id' => $pk,
        ]);

    }






    /**
     *
     * @return int
     */
    public function getProductoId(): int
    {
        return $this->producto_id;
    }

    /**
     *
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }
    /**
     * @return string
     */
    public function getPrecio(): string
    {
        return $this->precio;
    }
    /**
     * @return string
     */
    public function getImagen(): string
    {
        return $this->imagen;
    }
    /**
     * @return string
     */
    public function getImagenDescripcion(): string
    {
        return $this->imagen_descripcion;
    }

    /**
     * @param string $imagen_descripcion
     */
    public function setImagenDescripcion(string $imagen_descripcion): void
    {
        $this->imagen_descripcion = $imagen_descripcion;
    }

    /**
     * @return string
     */
    public function getTexto(): string
    {
        return $this->texto;
    }

    /**
     * @param string $fecha
     */
    public function setFecha(string $fecha): void
    {
        $this->fecha = $fecha;
    }



}