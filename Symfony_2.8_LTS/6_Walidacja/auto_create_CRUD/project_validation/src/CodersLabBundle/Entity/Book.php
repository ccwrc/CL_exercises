<?php

namespace CodersLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="CodersLabBundle\Repository\BookRepository")
 */
class Book
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
     * @Assert\Length(min=5, minMessage="Minimum to {{ limit }} znaków")
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title; //@ORM\Column(name="title", type="string", length=255)

    /**
     * @var float
     * @Assert\Range(min="0.00", max="10.00", minMessage="Minimalna wartość to {{ limit }}",
     *  maxMessage="Maksymalna wartość to {{ limit }}")
     * @ORM\Column(name="rating", type="float")
     */
    private $rating;

    /**
     * @var string
     * @Assert\Length(max=600, maxMessage="Maksymalna ilość znaków to: {{ limit }}")
     * @ORM\Column(name="description", type="string", length=600)
     */
    private $description;

    /**
     * @var int
     * @Assert\Range(min=0, minMessage="Minimalna wartość to: {{ limit }}")
     * @ORM\Column(name="pages", type="integer")
     */
    private $pages;
    
    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="books")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $author;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set rating
     *
     * @param float $rating
     * @return Book
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return float 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return Book
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set author
     *
     * @param \CodersLabBundle\Entity\Author $author
     * @return Book
     */
    public function setAuthor(\CodersLabBundle\Entity\Author $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \CodersLabBundle\Entity\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
