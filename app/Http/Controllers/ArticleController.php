<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category')->orderBy('created_at','desc')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10|max:255',
            'slug' => 'required|unique:articles,slug',
            'content' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            
        ]);
        Article::create([
            'title' => $request->tittle,
            'slug' => $request->slug,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        $article = Article::create($request->all());
        return redirect()->route('articles.index')->with('succes', 'Article created succesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
