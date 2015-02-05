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

    public function uploadFile($file)
    {
    	$uploadPath = public_path() . '/uploads';
		$fileName   = $this->id . '-' . $file->getClientOriginalName();

		Input::file('photo')->move($uploadPath, $fileName);
		$this->photo = '/uploads/' . $fileName;

		$this->save();
    }

}