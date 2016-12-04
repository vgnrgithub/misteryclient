<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Infrastructure\Repositories\CategoryRepository;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Infrastructure\Repositories\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="bgimage", type="string", length=255, nullable=false)
     */
    private $bgimage;

    /*
     * @ORM\OneToMany(targetEntity="Audit", mappedBy="category")

    private $audits;*/

    public function __construct()
    {
        $this->audits = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setBgimage($bgimage)
    {
        $this->bgimage = $bgimage;

        return $this;
    }

    public function getBgimage()
    {
        return $this->bgimage;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAudits()
    {
        return $this->audits;
    }

}
