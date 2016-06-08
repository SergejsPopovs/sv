<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Player;
use App\Prole;
use App\Photo;

class PlayersController extends Controller
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
        $players = Player::all();
        $this->data['players'] = $players;
        return view('admin.players.list',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photos = Photo::all();
        $this->data['photos'] = $photos;
        $proles = Prole::all();
        $this->data['proles'] = $proles;
        return view('admin.players.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all=$request->all();//введённые пользователем даные в массив all
        Player::create($all);
        return back()->with('message','spēlētājs pievienots');
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
        $player = Player::find($id);
        $photos = Photo::all();
        $proles = Prole::all();
        $this->data['player'] = $player;
        $this->data['photos'] = $photos;
        $this->data['proles'] = $proles;
        
        return view('admin.players.edit',$this->data);
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
        $player = Player::find($id);
        $player->update($request->all());
        $player->save();
        return back()->with('message' , 'spēlētājs atjaunināts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player->delete();
        return back()->with('message' , 'spēlētājs dzēsts');
    }
}
