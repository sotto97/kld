<?php

namespace App\Http\Controllers;

use App\Article;
use App\Client;
use App\Category;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles   = DB::table('articles')
        //             ->select('id', 'category_id', 'user_id', 'subject', 'status', 'limit_dt', 'order_derail', 'report','answer','','',);
                    // ->get();

        // すべての情報を取得
        // $articles   = DB::table('articles')
        //             // ->orderByDesc('id')
        //             ->get();

        // $articles = DB::select('SELECT * FROM articles ORDER BY id DESC');
        // $articles = Article::with('user');
        $articles = Article::all();
        // $users = User::all()->get();
        // dd($articles);

        // dd($articles[1]);
        // return view('article.index', ['articles' => $articles ]);
        return view('article.index', compact('articles'));
        // return view('article.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')
                    ->select('id','name')
                    ->get();

        $clients = DB::table('clients')
                    ->select('id','name')
                    ->get();

        $users = DB::table('users')
                    ->select('id','name')
                    ->get();

        return view('article.create', ['categories' => $categories, 'clients' => $clients, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        
        $article->client_id     = $request->client_id;
        $article->user_id       = $request->user_id;
        $article->limit_dt      = $request->limit_dt;
        $article->category_id   = $request->category_id;
        $article->subject       = $request->subject;
        $article->order_detail  = $request->order_detail;
        $article->answer        = $request->answer;
        $article->status        = $request->status;
        $article -> save();

        return redirect('/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        // return view('article.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        // return view('article.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        return redirect('/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
