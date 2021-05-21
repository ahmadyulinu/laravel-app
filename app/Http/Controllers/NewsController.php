<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        $news = News::get();
        

        return view('pages.news.news')->with([
            'news' => $news
        ]);

        
    }

    public function all() {
        $news = News::get();
        $res = [
            'msg' => 'List Articles sorted by Title', 
            'data' => $news 
        ];
        return response()->json($res, Response::HTTP_OK);
        
    }

    public function findOne($id) {
        $news = News::find($id);
        $res = [
            'msg' => '1 Article Retrieved',
            'data' => $news
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
        return view('pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'article_title' =>  'required',
            'article_image' => 'required',
            'article_content' => 'required',
            'article_author' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $news = News::create($request->all());

            return redirect()->route('news.index');
        } catch (QueryException $e){
            return response()->json(
                ['message' => 'Input failed. Reason: ' . $e->errorInfo]
            );
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
        $news = News::findOrFail($id);
        
        return view('pages.news.edit')->with([
            'news' => $news
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
        $check = News::findOrFail($id);     
        $validator = Validator::make($request->all(), [
            'article_title' =>  'required',
            'article_image' => 'required',
            'article_content' => 'required',
            'article_author' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $check->update($request->all());
            $get = News::all();
            return view('pages.news.news')->with([
                'news' => $get
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
        $news = News::findOrFail($id);
        try {
            $news->delete();
            return redirect()->route('news.index');
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Query failed. Reason:" . $e->errorInfo         
            ]);
        }
    }
}