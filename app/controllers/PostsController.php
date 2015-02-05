<?php

class PostsController extends BaseController 
{
	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');


		if(Input::has('search'))
		{
			$value = $_GET['search'];
			$query->where('body', 'like', '%$value%');
			$query->orwhere('title', 'like', '%$value%');
			$query->wherehas('user', function($q)
			{
				$q->where('email', 'like', '%$value%');
			});
		}
		$posts = $query->orderBy('created_at', 'desc')->paginate(4);

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		$post->user_id = Auth::id();

		return $this->savePost($post);

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$post = Post::findorfail($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findorfail($id);

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findorfail($id);

		return $this->savePost($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		Session::flash('successMessage', 'Post Deleted!');
		return Redirect::action('PostsController@index');
	}

	protected function savePost($post) 
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {

			Log::warning("User made a bad PostsController request", array('id' => $id));
	    	Session::flash('errorMessage', 'Failed to save your post!');

	    	return Redirect::back()->withInput()->withErrors($validator);

	    } else {
			$post->title = Input::get('title');
			$post->body  = Input::get('body');
			$post->save();

			if (Input::hasFile('photo'))
				{
					$post->uploadFile(Input::file('photo'));	
				}

			Session::flash('sucessMessage', 'Sucessfully saved your post!');
			return Redirect::action('PostsController@index');
	    }		

	}


}
