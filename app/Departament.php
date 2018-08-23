<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected name;

    public function __construct($name)
    {
    	$this->name = $name;

    }
}
