<?php

class Post extends BaseModel
{
	protected $table = 'posts';

	protected $fillable = array('title', 'description');

	public static $rules = array(
		'title' => 'required|min:10|max:100',
		'description' => 'required|max:10000'
	);

	public function user()
	{
		return $this->belongsTo('User');
	}

}