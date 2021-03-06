<?php

namespace Spotted\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="spt_user")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    

    
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string")
     * @Assert\NotBlank()
     */
 	protected $firstname;
 	
 	/**
 	 * @var string
 	 *
 	 * @ORM\Column(name="lastname", type="string")
 	 * @Assert\NotBlank()
 	 */
 	protected $lastname;
 	
 	/**
 	 * @var string
 	 *
 	 * @ORM\Column(name="gender", type="string", length=1)
 	 * @Assert\NotBlank()
 	 */
 	protected $gender;
 	
 	public function getFirstName()
 	{
 		return $this->firstname;
 	}
 	
 	public function setFirstName($firstname)
 	{
 		$this->firstname = $firstname;
 	
 		return $this;
 	}
 	
 	public function getGender()
 	{
 		return $this->gender;
 	}
 	
 	public function setGender($gender)
 	{
 		$this->gender = $gender;
 	
 		return $this;
 	}
 	
 	public function getLastName()
 	{
 		return $this->lastname;
 	}
 	
 	public function setLastName($lastname)
 	{
 		$this->lastname = $lastname;
 	
 		return $this;
 	}
 	
 	public function setEmail($email)
 	{
 		parent::setEmail($email);
 		$this->setUsername($email);
 	}
    
}
