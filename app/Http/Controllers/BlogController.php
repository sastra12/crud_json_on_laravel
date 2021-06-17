<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\resort;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Storage::disk('local')->get('public/data.json');
        // $data = file_get_contents('storage/data.json');
        $json = json_decode($data,true);
        return view('blog/index')->with('json',$json);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Storage::disk('local')->get('public/data.json');
        $data=json_decode(Storage::disk('local')->get('public/data.json'));
        $inputData = $request->only(['judul', 'author', 'content']);
        $inputData['datetime_submitted'] = date('j-F-Y H:i:s');
        array_push($data,$inputData);
        Storage::disk('local')->put('public/data.json', json_encode($data, JSON_PRETTY_PRINT));
        return redirect('/')->with('success','Berhasil Menambahkan Artikel Baru!');
        
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
        $data = Storage::disk('local')->get('public/data.json');
        // $data = file_get_contents('storage/data.json');
        $json = json_decode($data,true);
        $all = $json[$id];
        // dd($all);
        return view('blog/show',['all'=>$all]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data = Storage::disk('local')->get('public/data.json');
        // $data = file_get_contents('storage/data.json');
        $json = json_decode($data,true);
        $all = $json[$id];
        // dd($all);
        return view('blog/edit',compact('all'));
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
        $data = Storage::disk('local')->get('public/data.json');
        // $data = file_get_contents('storage/data.json');
        $json = json_decode($data,true);
        // $update = $request->only(['judul', 'author', 'content']);
        $title = $request->judul;
        $author = $request->author;
        $content = $request->content;
        $json[$id]=array(
                'judul'=> $title,
                'author'=> $author,
                'content' => $content,
                'datetime_submitted' => date('H:i:s d-m-Y'),
            );
        Storage::disk('local')->put('public/data.json', json_encode($json, JSON_PRETTY_PRINT));
        return redirect('/')->with('berhasil','Data Berhasil di Ubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $json = Storage::disk('local')->get('public/data.json');
        $data = json_decode($json,true);
        array_splice($data,$id,1);
        $json=Storage::disk('local')->put('public/data.json', json_encode($data, JSON_PRETTY_PRINT));
        return redirect()->back();
    }

    public function back(){
        return redirect('/');
    }
}
