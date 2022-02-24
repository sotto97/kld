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
        // すべての情報を取得
        // $articles   = DB::table('articles')
        //             ->orderByDesc('id')
        //             ->get();

        $articles = Article::orderBy('id', 'desc')->get();

        return view('article.index', compact('articles'));
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

        $validatedData = $request->validate([
            'client_id'     => 'required',
            'user_id'       => 'required',
            'limit_dt'      => 'required',
            'category_id'   => 'required',
            'subject'       => 'required',
            'order_detail'  => 'required',
            'answer'        => 'required',
            'status'        => 'required',
        ]);
        
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
    public function edit(Article $article, $id)
    {
        $article = Article::find($id);

        $categories = DB::table('categories')
                    ->select('id','name')
                    ->get();

        $clients = DB::table('clients')
                    ->select('id','name')
                    ->get();

        $users = DB::table('users')
                    ->select('id','name')
                    ->get();

        return view('article.edit', ['article' => $article, 'categories' => $categories, 'clients' => $clients, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article, $id)
    {
        $article = Article::find($id);

        $article->client_id     = $request->client_id;
        $article->user_id       = $request->user_id;
        $article->limit_dt      = $request->limit_dt;
        $article->category_id   = $request->category_id;
        $article->subject       = $request->subject;
        $article->order_detail  = $request->order_detail;
        $article->report        = $request->report;
        $article->answer        = $request->answer;
        $article->status        = $request->status;
        $article -> save();

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
