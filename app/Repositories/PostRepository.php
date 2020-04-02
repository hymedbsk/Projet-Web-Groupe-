<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{

    protected $post;

    public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function getPaginate($n)
	{
		return $this->post->with('user')
		->orderBy('post.Date', 'desc')
		->paginate($n);
	}

	public function store($inputs)
	{

		$this->post->create($inputs);
    }
    public function edit($id)
	{

		$this->post->edit($id);
	}

	public function destroy($id)
	{
		$this->post->findOrFail($id)->delete();
	}

}
