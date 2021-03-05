<?php
namespace EmployeesApp;
class Manager extends Employees {
    private $departament;

    public function setDepartament($departament)
    {
        $this->departament = $departament;
    }

    public function getDepartament()
    {
        return $this->departament;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }
    public function getFullName(){
        return $this->firstName." ".$this->lastName;
    }
    public function showData(): array
    {
        return [$this->firstName,$this->lastName,$this->phoneNumber,$this->departament];
    }
}