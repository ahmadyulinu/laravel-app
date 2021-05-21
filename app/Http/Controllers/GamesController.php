<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $games = Games::get();
    
        return view('pages.games.games')->with([
            'games' => $games
        ]);
    }

    public function all() { 
        $games = Games::get();
        $res = [
            'msg' => 'List Games Articles', 
            'data' => $games 
        ];

        return response()->json($res, Response::HTTP_OK);
    }

    public function findOne($id) {
        $games = Games::find($id);
        $res = [
            'msg' => '1 Article Retrieved',
            'data' => $games
        ];

        return response()->json($res, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'article_title' =>  'required',
            'article_game' => 'required',
            'article_content' => 'required',
            'article_author' => 'required',
            'game_link' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $games = Games::create($request->all());
            return redirect()->route('games.index');
        } catch (QueryException $e){
            return response()->json($e->errorInfo);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $games = Games::findOrFail($id);
        
        return view('pages.games.edit')->with([
            'games' => $games
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $check = Games::findOrFail($id); 
        $validator = Validator::make($request->all(), [
            'article_title' =>  'required',
            'article_game' => 'required',
            'article_content' => 'required',
            'article_author' => 'required',
            'game_link' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $check->update($request->all());
            $get = Games::all();
            return view('pages.games.games')->with([
                'games' => $get
            ]);
        } catch (QueryException $e){
            return response()->json(
                ['message' => 'Input failed. Reason: ' . $e->errorInfo]
            );
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
        $news = Games::findOrFail($id);
        try {
            $news->delete();
           return redirect()->route('games.index');
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Query failed. Reason:" . $e->errorInfo         
            ]);
        }
    }
}