<?php


class Employee
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $birthday;
    protected $address;
    protected $role;


    public function __construct($arr)
    {
        $this->firstName = $arr['firstName'];
        $this->lastName = $arr['lastName'];
        $this->birthday = $arr['birthday'];
        $this->address = $arr['address'];
        $this->role = $arr['role'];
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}