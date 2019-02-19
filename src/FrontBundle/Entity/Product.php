<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="product")
     */
    private $comment;

    /**
     * @ORM\OneToMany(targetEntity="rating", mappedBy="product")
     */
    private $rating;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="product")
     */
    private $category;

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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return Product
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return int
     */
    public function getQte()
    {
        return $this->qte;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rating = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \FrontBundle\Entity\Comment $comment
     *
     * @return Product
     */
    public function addComment(\FrontBundle\Entity\Comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \FrontBundle\Entity\Comment $comment
     */
    public function removeComment(\FrontBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Add rating
     *
     * @param \FrontBundle\Entity\rating $rating
     *
     * @return Product
     */
    public function addRating(\FrontBundle\Entity\rating $rating)
    {
        $this->rating[] = $rating;

        return $this;
    }

    /**
     * Remove rating
     *
     * @param \FrontBundle\Entity\rating $rating
     */
    public function removeRating(\FrontBundle\Entity\rating $rating)
    {
        $this->rating->removeElement($rating);
    }

    /**
     * Get rating
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set category
     *
     * @param \FrontBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\FrontBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \FrontBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
