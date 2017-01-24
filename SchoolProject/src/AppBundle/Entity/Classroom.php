<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Classroom implements \JsonSerializable{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue 
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $name;
    
    /**
     *@ORM\OneToMany(targetEntity="Pupil", mappedBy="classroom")
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
     * @return Classroom
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
    
    public function jsonSerialize() {
        return [
            "id" => $this->id,
            "name" => $this->name //mozna dodac pupils
        ];
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
     * @return Classroom
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
