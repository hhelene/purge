<?php
// src/OC/PlatformBundle/Entity/Skill.php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OC\PlatformBundle\Entity\AdvertSkill;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="oc_skill")
 */
class Skill
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;


    /**
     * Skill constructor.
     */
    public function __construct()
    {
        $this->advertSkills = new ArrayCollection();
    }
    // Getters et setters
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
     *
     * @return Skill
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
     * Add advertSkill
     *
     * @param AdvertSkill $advertSkill
     *
     * @return Skill
     */
    public function addAdvertSkill(AdvertSkill $advertSkill)
    {
        $this->advertSkills[] = $advertSkill;
        $advertSkill->setSkill($this);
        return $this;
    }
    /**
     * Remove advertSkill
     *
     * @param AdvertSkill $advertSkill
     */
    public function removeAdvertSkill(AdvertSkill $advertSkill)
    {
        $this->advertSkills->removeElement($advertSkill);
    }
    /**
     * Get advertSkills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdvertSkills()
    {
        return $this->advertSkills;
    }



}
