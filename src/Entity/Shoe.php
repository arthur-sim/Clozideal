<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShoeRepository")
 */
class Shoe {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Image", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity="Brand", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $brands;

    /**
     * @ORM\ManyToMany(targetEntity="Style", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $styles;

    /**
     * @ORM\ManyToMany(targetEntity="Color", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $colors;

    /**
     * @ORM\ManyToMany(targetEntity="Numero", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $numero;

    /**
     * @ORM\ManyToMany(targetEntity="Dimension", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dimension;

    /**
     * @ORM\ManyToMany(targetEntity="Description", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Size")
     * @ORM\JoinColumn(nullable=false)
     */
    private $size;

    /**
     * @ORM\ManyToOne(targetEntity="Matter")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matter;

    /**
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumn(nullable=false)
     */
    private $state;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }
    
    function getImages() {
        return $this->images;
    }

    function getBrands() {
        return $this->brands;
    }

    function getStyles() {
        return $this->styles;
    }

    function getColors() {
        return $this->colors;
    }

    function getNumero() {
        return $this->numero;
    }

    function getDimension() {
        return $this->dimension;
    }

    function getDescription() {
        return $this->description;
    }

    function getSize() {
        return $this->size;
    }

    function getMatter() {
        return $this->matter;
    }

    function getState() {
        return $this->state;
    }

    function getCategory() {
        return $this->category;
    }

    function setImages($images) {
        $this->images = $images;
    }

    function setBrands($brands) {
        $this->brands = $brands;
    }

    function setStyles($styles) {
        $this->styles = $styles;
    }

    function setColors($colors) {
        $this->colors = $colors;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setDimension($dimension) {
        $this->dimension = $dimension;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setSize($size) {
        $this->size = $size;
    }

    function setMatter($matter) {
        $this->matter = $matter;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setCategory($category) {
        $this->category = $category;
    }

}
