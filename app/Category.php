<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //salvar datos de forma masiva
	protected $fillable = [
		'name',
		'slug',
		'body'
	];

    public function posts()
    {
    	//una categoria tiene muchos posts
    	//relacion de uno a muchos
    	return $this->hasMany(Post::class);
    }
}
