<?php

namespace App\Http\Controllers;

use App\Article, Alert;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $artikel = Article::where('title', 'like', '%' . $request->cari . '%')
                ->orWhere('author', 'like', '%' . $request->cari . '%')->latest()->paginate(5);
            $view = (String) view('artikel.list')->with('artikel',$artikel)->render();
            return response()->json(['view' => $view, 'status' => 'success']);
        }
        $artikel = Article::latest()->paginate(5);
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        Alert::success('Berhasil menambah artikel','Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $comments = Article::findOrFail($id)->comments()->latest()->paginate(5);
        return view('artikel.show', compact('article','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('artikel.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        Alert::success('Berhasil merubah data','Update');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        Alert::success('Berhasil menghapus data','Delete');
        return back();
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        if (!empty($cari)) {
            $artikel = Article::where('title', 'like', '%' . $cari . '%')
                ->orWhere('author', 'like', '%' . $cari . '%')->paginate(5);
        } else {
            $artikel = Article::paginate(5);
        }
        return view('artikel.index', compact('artikel'));
    }
}
