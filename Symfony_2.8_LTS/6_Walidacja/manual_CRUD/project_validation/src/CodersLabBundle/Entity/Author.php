<?php

namespace CodersLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="CodersLabBundle\Repository\AuthorRepository")
 */
class Author
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
     * @Assert\Length(min=5, minMessage="Minimalna ilość znaków to {{ limit }}")
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @Assert\Length(max=600, maxMessage="Maksymalna ilość znaków to {{ limit }}")
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     * @Assert\Range(min=18, minMessage="Minimalna wartość to {{ limit }}")
     * @ORM\Column(name="age", type="integer")
     */
    private $age;
    
    /**
     * @ORM\OneToMany(targetEntity="Book", mappedBy="author")
     */
    private $books;


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
     * Set name
     *
     * @param string $name
     * @return Author
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
     * Set description
     *
     * @param string $description
     * @return Author
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
     * Set age
     *
     * @param integer $age
     * @return Author
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->books = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add books
     *
     * @param \CodersLabBundle\Entity\Book $books
     * @return Author
     */
    public function addBook(\CodersLabBundle\Entity\Book $books)
    {
        $this->books[] = $books;

        return $this;
    }

    /**
     * Remove books
     *
     * @param \CodersLabBundle\Entity\Book $books
     */
    public function removeBook(\CodersLabBundle\Entity\Book $books)
    {
        $this->books->removeElement($books);
    }

    /**
     * Get books
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBooks()
    {
        return $this->books;
    }
    
    public function __toString() {
        return (string)  $this->name;
    }
}
