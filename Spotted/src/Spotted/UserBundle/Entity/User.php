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
     * @ORM\Column(name="captcha", type="string", length=255)
     * @Assert\MinLength(10)
     */
    protected $captcha;
    
    public function getCaptcha()
    {
    	return $this->captcha;
    }
    
    public function setCaptcha($captcha)
    {
    	$this->captcha = $captcha;
    
    	return $this;
    }

}
