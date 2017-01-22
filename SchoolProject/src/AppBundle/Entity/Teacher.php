<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teacher
 *
 * @ORM\Table(name="teacher")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeacherRepository")
 */
class Teacher
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
     * @var float
     *
     * @ORM\Column(name="experience", type="float")
     */
    private $experience;
    
    /**
     * @ORM\ManyToMany(targetEntity="Pupil", mappedBy="teachers")
     */
    private $pupils;


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
     * @return Teacher
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
     * Set experience
     *
     * @param float $experience
     * @return Teacher
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return float 
     */
    public function getExperience()
    {
        return $this->experience;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pupils = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pupils
     *
     * @param \AppBundle\Entity\Pupil $pupils
     * @return Teacher
     */
    public function addPupil(\AppBundle\Entity\Pupil $pupils)
    {
        $this->pupils[] = $pupils;

        return $this;
    }

    /**
     * Remove pupils
     *
     * @param \AppBundle\Entity\Pupil $pupils
     */
    public function removePupil(\AppBundle\Entity\Pupil $pupils)
    {
        $this->pupils->removeElement($pupils);
    }

    /**
     * Get pupils
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPupils()
    {
        return $this->pupils;
    }
}
