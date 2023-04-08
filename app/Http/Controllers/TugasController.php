<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tugasModel;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tugasModel::all();
       $id = 0;
        //dd($data);

        return view('tugas', compact('data', 'id'));
      //  return view('tugas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formtugas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|min:5',
            'title' => 'required',
            'body' => 'required',
            'keyword' => 'required',
        ]);

        $create = tugasModel::create($request->all());
        return redirect()->route('tugas');
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
        $table_blog= tugasModel::findOrFail($id);

        // dd($mid_014);

        return view('tugasedit', compact('table_blog'));
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
        $table_blog = tugasModel::findOrFail($id);

        $table_blog->author = $request->author;
        $table_blog->title = $request->title;
        $table_blog->body = $request->body;
        $table_blog->keyword = $request->keyword;


        $table_blog->save();

        if ($table_blog) {
         return redirect()->route('tugas');
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
        $table_blog = tugasModel::findOrFail($id);
        $table_blog->delete();

        if ($table_blog) {
            return redirect()->route('tugas');
           }
    }
}
