<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tamu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    use HasFactory;

    public function index(){
        $data = Tamu::all();
        return view('dataTamu', compact('data'));
    }
}
