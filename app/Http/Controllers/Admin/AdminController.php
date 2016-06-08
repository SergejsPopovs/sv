<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
        $this->data = [
            'title' => 'sedvolejbols',
        ];
    }
    
    public function go() 
    {
        return view('admin.dashboard',$this->data);
    }
}
