<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   public function __construct()
    {
        $this->table = 'users';
        parent::__construct();
    }  
}
