<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
<<<<<<< HEAD

    /*
    *O model já referência a tabela 'post' na migration
    *por isso o código abaixo seria usado somente se o model
    *tivesse outro nome.
    */ 
    //opcional
    protected $table = 'post';
=======
>>>>>>> e103c649e25e78f6e15689bb92394d283f892e49
}
