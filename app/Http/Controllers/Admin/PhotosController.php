<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    {
        $this->middleware('auth');
        $this->data = [
            'title' => 'sedvolejbols',
        ];
    }
    
    public function index()
    {
        $photos = Photo::all();
        $this->data['photos'] = $photos;
        return view('admin.photos.list',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //составим имя фала для сохранения на сервере
        $dir = "/img/photos/articles/";
        $fTitle = str_replace(" ", "_", $request->title);
        $fId = uniqid();
        $fName = $fTitle.$fId.".jpg";
        
        //копируем файл в проект
        if($request->hasFile('img')){
            $imgFile = $request->file('img');
            $imgFile->move($_SERVER['DOCUMENT_ROOT'].$dir, $fName);
        }
        
        $all=$request->all();//введённые пользователем даные в массив all
        $all['location']=$dir.$fName;//добавим туда место где хранится файл
                
        //сохраним данные в БД
        Photo::create($all);
        return back()->with('message','fotoattēls pievienots');
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
        $photo = Photo::find($id);
        $this->data['photo'] = $photo;
        
        return view('admin.photos.edit',$this->data);
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
        $photo = Photo::find($id);
        $photo->update($request->all());
        $photo->save();
        return back()->with('message' , 'Fotoattēls atjaunināts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return back()->with('message' , 'Fotoattēls dzēsts');
    }
}
