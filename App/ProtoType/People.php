<?php

namespace App\ProtoType;

class People implements Prototype
{

    private $name;

    private $company;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany(Company $company)
    {
        $this->company = $company;
    }

    /**
     * 浅复制
     * @return People
     */
    public function shallowCopy()
    {
        return clone $this;
    }

    /**
     * 深复制实现1
     * @return mixed
     */
    public function deepCopy()
    {
        return unserialize(serialize($this));
    }

    /**
     * 深复制实现2
     */
//    public function __clone()
//    {
//        $this->company = clone $this->company;
//    }
}
