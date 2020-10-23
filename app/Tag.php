<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //salvar datos de forma masiva
	protected $fillable = [
		'name',
		'slug'
	];

    public function posts()
    {
    	//una etiqueta tiene y pertenece a muchos posts
    	//relacion muchos a muchos
    	return $this->belongsToMany(Post::class);
    }
}
