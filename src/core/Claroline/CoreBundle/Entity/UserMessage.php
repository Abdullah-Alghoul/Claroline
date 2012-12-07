<?php

namespace Claroline\CoreBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="claro_user_message")
 */
class UserMessage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Claroline\CoreBundle\Entity\User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Claroline\CoreBundle\Entity\Message")
     */
    private $message;

    /**
     * @ORM\Column(type="boolean", name="is_removed")
     */
    protected $isRemoved;

    /**
     * @ORM\Column(type="boolean", name="is_read")
     */
    protected $isRead;

    public function __construct()
    {
        $this->isRead = false;
        $this->isRemoved = false;
    }

    public function getId()
    {
        return $this->id;
    }

    public function markAsRemoved()
    {
        $this->isRemoved = true;
    }

    public function markAsRead()
    {
        $this->isRead = true;
    }

    public function isRemoved()
    {
        return $this->isRemoved;
    }

    public function isRead()
    {
        return $this->isRead;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUserMessages()
    {
        return $this->userMessages;
    }
}