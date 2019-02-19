<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\ratingRepository")
 */
class rating
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="rating")
     */
    private $product;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return rating
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set product
     *
     * @param \FrontBundle\Entity\Product $product
     *
     * @return rating
     */
    public function setProduct(\FrontBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \FrontBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
