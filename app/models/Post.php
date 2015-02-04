<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
    	'title' => 'required|max:100',
    	'body'  => 'required'
    );

    public function user()
    {
    	return $this->belongsTo('User');
    }

}