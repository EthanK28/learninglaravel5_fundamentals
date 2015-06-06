<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ArticlesController extends Controller {

	//

//    public function __construct(){
//        $this->middleware('auth', ['except' => 'index']);
//    }

    public function index(){
        $articles = Article::latest('published_at')->published()->get();

//        return view('articles.index', compact('articles'));
        return view('articles.index')->with('articles', $articles);
    }

    public function show(Article $article){

//        dd($id);
//        $article = Article::findOrFail($id);
        //dd($article->published_at);

//        return $article;
        return vieW('articles.show', compact('article'));

    }

    public function create(){

        if(Auth::guest()){
            return redirect('articles');
        }
        return view('articles.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request){


        Auth::user()->articles()->create($request->all());

        \Session::flash('flash_message', 'Your article has been created' );

        return redirect('articles');
    }

    public function edit(Article $article){

//        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));


    }

    public function update(Article $article, ArticleRequest $request){
//        $article = Article::findOrFail($id);


        $article->update($request->all());

        return redirect('articles');

    }




}
