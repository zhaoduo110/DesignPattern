<?php

namespace App\ProtoType;

interface Prototype{
    public function shallowCopy();

    public function deepCopy();
}