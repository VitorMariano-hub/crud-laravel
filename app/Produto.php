<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ["nome", "marca", "preco"];

    protected $table = "produtos";

}
