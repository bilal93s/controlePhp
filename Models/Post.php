<?php

namespace App\Models;

use App\Core\Helper;
use App\Core\Model;

class Post extends Model
{
    public function initRelation(): array {
        return [
            'author' => User::class
        ];
    }  
}