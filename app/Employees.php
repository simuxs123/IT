<?php
namespace EmployeesApp;
abstract class Employees {
    protected $firstName;
    protected $lastName;
    protected $phoneNumber;
    public function __construct($firstName,$lastName,$phoneNumber)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->phoneNumber=$phoneNumber;
    }
    abstract protected function getFirstName();
    abstract protected function setFirstName($firstName);
    abstract protected function getLastName();
    abstract protected function setLastName($lastName);
    abstract protected function getPhoneNumber();
    abstract protected function setPhoneNumber($phoneNumber);
    abstract public function showData():array;
}
