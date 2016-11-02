<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Infrastructure\Repositories\AuditRepository;

/**
 * Audit
 *
 * @ORM\Table(name="audit")
 * @ORM\Entity
 */
class Audit
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
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="provinencia", type="string", length=255, nullable=false)
     */
    private $provinencia;


    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $category_id;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="audits")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

    /*
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")

    private $category;*/


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

    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    public function setProvinencia($provinencia)
    {
        $this->provinencia = $provinencia;

        return $this;
    }

    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Set category_id
     *
     * @param integer $category_id
     *
     * @return Audit
     */
    public function setCategory($categoryid)
    {
        $this->category_id = $categoryid;

        return $this;
    }

}
