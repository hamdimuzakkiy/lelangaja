<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Item;

class AdminController extends LogicController
{
    public function __construct(){    	
    	
    }

    public function index(){    
    	return dd(Item::with('User','Source')->get());
    }

}
