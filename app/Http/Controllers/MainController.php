<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;
use App\Player;
use App\Prole;
use App\Event;

class MainController extends Controller
{
    public function __construct() 
    {
        $this->data = [
            'title' => 'sedvolejbols',
        ];
    }
    
    public function home()
    {
        $articls = Article::orderBy('created_at','desc')->get();
        $this->data['news'] = $articls;
        
        return view('pages.home', $this->data); 
    }
    
    public function show($id)
    {
        $article = Article::find($id);
        $article->view_count=$article->view_count+1;
        $article->save();
        $this->data['new'] = $article;
        
        return view('pages.show',  $this->data); 
    }
    
    public function history()
    {
        $file_his = fopen("text/history.html", "r");
        $history = '';
        
        while (!feof($file_his)){
            $history = $history.fgets($file_his);
        }
        
        fclose($file_his);
                    
        $this->data['history'] = $history;
        return view('pages.history',$this->data); 
    }
    
    public function players()
    {
        $players = Player::all();
        $this->data['players'] = $players;
        
        return view('pages.players', $this->data); 
    }
    
    public function events()
    {
       $events = Event::all(); 
       
       $this->data['events'] = $events;
       return view('pages.events',  $this->data); 
    }
    
    public function about()
    {
        $staff_id = Prole::where('title','=','staff')->pluck('id');
        $staff = Player::where('prole_id','=',$staff_id)->get();
        $this->data['staff'] = $staff;
        
        return view('pages.about',  $this->data); 
    }
}
