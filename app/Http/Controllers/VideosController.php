<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vids = Videos::get();
        

        return view('pages.vids.videos')->with([
            'vids' => $vids
        ]);
    }

    public function all() {
        $vids = Videos::get();
        $res = [
            'msg' => 'List Videos Retrieved ', 
            'data' => $vids 
        ];
        return response()->json($res, Response::HTTP_OK);
        
    }

    public function findOne($id) {
        $vids = Videos::find($id);
        $res = [
            'msg' => '1 Article Retrieved',
            'data' => $vids
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
        return view('pages.vids.create');
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
            'video_title' =>  'required',
            'video_thumbnail' => 'required',
            'uploader' => 'required',
            'video_link' => 'required',
            'date_uploaded' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $vids = Videos::create($request->all());

            return redirect()->route('vids.index');
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
        $vids = Videos::findOrFail($id);
        
        return view('pages.vids.edit')->with([
            'vids' => $vids
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
        $check = Videos::findOrFail($id); 
        $validator = Validator::make($request->all(), [
            'video_title' =>  'required',
            'video_thumbnail' => 'required',
            'uploader' => 'required',
            'video_link' => 'required',
            'date_uploaded' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $check->update($request->all());
            $get = Videos::all();
            return view('pages.vids.videos')->with([
                'vids' => $get
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
        $vids = Videos::findOrFail($id);
        try {
            $vids->delete();
            return redirect()->route('vids.index');
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Query failed. Reason:" . $e->errorInfo         
            ]);
        }
    }
}