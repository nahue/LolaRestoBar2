<?php



/**
 * Producto
 */
class Producto
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var date $vigencia
     */
    private $vigencia;

    /**
     * @var float $precio
     */
    private $precio;

    /**
     * @var Categoria
     */
    private $Categorias;

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
     * Set vigencia
     *
     * @param date $vigencia
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;
    }

    /**
     * Get vigencia
     *
     * @return date $vigencia
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }

    /**
     * Set precio
     *
     * @param float $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * Get precio
     *
     * @return float $precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Add Categorias
     *
     * @param Categoria $categorias
     */
    public function addCategorias(\Categoria $categorias)
    {
        $this->Categorias[] = $categorias;
    }

    /**
     * Get Categorias
     *
     * @return Doctrine\Common\Collections\Collection $categorias
     */
    public function getCategorias()
    {
        return $this->Categorias;
    }
}