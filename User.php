<?php


class User
{
 public $name;
 public $surname;
 public $date;
 public $login_registration;
 public $password_registration;

    /**
     * User constructor.
     */
    public function __construct($n,$s,$d,$lr,$pr)
    {
        $this->name=$n;
        $this->surname=$s;
        $this->date=$d;
        $this->login_registration=$lr;
        $this->password_registration=$pr;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getLoginRegistration()
    {
        return $this->login_registration;
    }

    /**
     * @return mixed
     */
    public function getPasswordRegistration()
    {
        return $this->password_registration;
    }

}