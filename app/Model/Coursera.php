<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coursera extends Model
{
    public function __construct()
    {
        $this->table = 'coursera';
        parent::__construct();
    }  
}
