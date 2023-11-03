<?php

namespace App\Http\Controllers;

use App\Http\Resources\Artigo as ArtigoResource;
use App\Models\Artigo as Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Artigo::paginate(5);
        return ArtigoResource::collection($article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*   public function create()
    {
        
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Artigo;
        $article->titulo = $request->input('titulo');
        $article->conteudo = $request->input('conteudo');
        
        if ($article->save()) {
            return new ArtigoResource($article);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Artigo::findOrFail($id);
        return new ArtigoResource($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /*  public function edit($id)
    {
        
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $article = Artigo::findOrFail($request->id);
        $article->titulo = $request->input('titulo');
        $article->conteudo = $request->input('conteudo');
        
        if ($article->save()) {
            return new ArtigoResource($article);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Artigo::findOrFail($id);
        if ($article->delete()) {
            return new ArtigoResource($article);
        }
    }
}
