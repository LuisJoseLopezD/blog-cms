<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	//salvar datos de forma masiva
	protected $fillable = [
		'user_id',
		'category_id',
		'name',
		'slug',
		'excerpt',
		'body',
		'status',
		'file' 
	];

	public function user()
	{
		//un post peretenece a un usuario
		return $this->belongsTo(User::tag);
	}

	public function category()
	{
		//un post pertenece a una categoria
		return $this->belongsTo(Category::tag);
	}

    public function tags()
    {
    	//un post pertenece a muchas etiquetas
    	return $this->belongsToMany(Tag::class);
    }
}
