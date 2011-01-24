<?php



/**
 * Categoria
 */
class Categoria
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $parent_id
     */
    private $parent_id;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var string $descripcion
     */
    private $descripcion;

    /**
     * @var Producto
     */
    private $Productos;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parent_id
     *
     * @param integer $parentId
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
    }

    /**
     * Get parent_id
     *
     * @return integer $parentId
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return string $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add Productos
     *
     * @param Producto $productos
     */
    public function addProductos(\Producto $productos)
    {
        $this->Productos[] = $productos;
    }

    /**
     * Get Productos
     *
     * @return Doctrine\Common\Collections\Collection $productos
     */
    public function getProductos()
    {
        return $this->Productos;
    }
}