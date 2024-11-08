<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bind;
class BindController extends Controller
{
    //
    function index(Bind $key){
        return $key;
    }
}
