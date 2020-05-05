<?php

namespace App\Http\Controllers;
use APP\Post;
use APP\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\URL;
class PostController extends Controller{
    protected $postRepository;

    protected $nbrPerPage = 6;

    public function __construct(PostRepository $postRepository){

        $this->middleware('auth', ['except' => 'index']);


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

        $posts = new Post;
        $posts->titre = $request->input('Titre');
        $posts->description = $request->input('Description');
        $posts->User_id = $request->user()->id;
        $posts->save();
        /*Post::create([
            'Titre' => $request ->Titre,
            'Description' => $request ->Description,
            'User_id' => $request->user()->User_id,
        ]);*/

		return redirect(route('post.index'))->withOk("Annonce crée");
    }


    public function edit($id){



        $posts= Post::find($id);
	

        if(auth()->user()->id !== $posts->User_id){

            return redirect(route('post.index'));

        }
      return view('posts.edit')->with('posts', $posts);

    }


    public function update(PostRequest $request, $id){


        $posts = Post::find($id);
	
        $posts->titre = $request->input('Titre');
        $posts->description = $request->input('Description');
        $posts->User_id = $request->user()->id;
        $posts->save();
        return redirect(route('post.index'));
    }

	public function destroy($id){

        $posts = Post::find($id);
        if(auth()->user()->id !== $posts->User_id){

            return redirect(route('post.index'));

        }

        $posts->delete();
		return redirect(route('post.index'));
	}
}
