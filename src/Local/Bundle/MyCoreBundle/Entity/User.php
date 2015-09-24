<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/24/15
 * Time: 5:51 PM
 */
// src/Local/Bundle/MyCoreBundle/Entity/User.php

namespace Local\Bundle\MyCoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}