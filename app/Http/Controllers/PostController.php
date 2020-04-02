<?php

namespace App\Http\Controllers;
use APP\Post;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\URL;
class PostController extends Controller{
    protected $postRepository;

    protected $nbrPerPage = 15;

    public function __construct(PostRepository $postRepository){

        $this->middleware('auth', ['except' => 'index']);
		$this->middleware('admin', ['only' => 'destroy']);

		$this->postRepository = $postRepository;
	}

	public function index(){

		$posts = $this->postRepository->getPaginate($this->nbrPerPage);
		$links = $posts->render();

		return view('posts.liste', compact('posts', 'links'));
	}

	public function create(){

		return view('posts.add');
    }

	public function store(PostRequest $request){

        Post::create([
            'Titre' => $request ->Titre,
            'Description' => $request ->Description,
            'User_id' => $request->user()->User_id,
        ]);

		return redirect(route('post.index'));
    }


    public function edit($id){

        $posts = Post::find($id);
        return view('posts.edit', compact('posts'));

    }


	public function destroy($id){

		$this->postRepository->destroy($id);

		return redirect()->back();
	}
}
