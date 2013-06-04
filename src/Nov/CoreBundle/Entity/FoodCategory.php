<?php

namespace Nov\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class FoodCategory
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $published;

    /**
     * @ORM\Column(type="integer")
     */
    protected $position;

    /**
     * @ORM\ManyToOne(targetEntity="FoodMenu", inversedBy="categories")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $menu;

    /**
     * @ORM\OneToMany(targetEntity="Food", mappedBy="category")
     */
    protected $foods;

    public function __construct()
    {
        $this->foods = new ArrayCollection;
        $this->published = false;
        $this->position = time();
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    public function getMenu()
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    public function getFoods()
    {
        return $this->foods;
    }

    public function setFoods($foods)
    {
        $this->foods = $foods;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->name;
    }
}
