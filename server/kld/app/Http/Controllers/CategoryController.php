<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;

        $category->name = $request->input('name');

        $category->save();

        return redirect('/category');
        // INSERT INTO categories SELECT nextval(id),name,created_at,updated_at FROM categories WHERE id = 1;
        // INSERT INTO 住所録(101511, 名称, 住所, ..., Xn) FROM 住所録 WHERE コード = 511000
        // INSERT INTO categories VALUES (nextval('categories_id_seq'), name, now(), now()); FROM categories WHERE id = 1;
        // SELECT * FROM categories WHERE id = 1;

        // INSERT INTO item
        // SELECT '鈴木' as 所有者, *
        // FROM   item
        // WHERE  所有者 = '田島'

        // INSERT INTO categories SELECT nextval('categories_id_seq') as id * FROM categories WHERE  id = 1;

        // CREATE TEMPORARY TABLE tmp_item FROM item WHERE 所有者='田島';
        // UPDATE tmp_item set id = '鈴木';
        // INSERT INTO item SELECT * FROM tmp_item;

        // CREATE TEMPORARY TABLE ctg_table FROM categories WHERE id = 1;
        // UPDATE ctg_table set id = nextval('categories_id_seq');
        // INSERT INTO categories SELECT * FROM ctg_table;

        // select nextval('categories_id_seq') from categories;

        // これでいける
        // insert into categories select nextval('categories_id_seq'), name, now(), now() from categories where id = 1;
        // insert into categories select nextval('categories_id_seq'), name, now(), now() from categories where id IN (1,5);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
