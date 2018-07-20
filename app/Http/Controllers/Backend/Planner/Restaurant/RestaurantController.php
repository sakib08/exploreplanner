<?php

namespace App\Http\Controllers\Backend\Planner\Restaurant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('backend.planner.restaurantcreate');
    }
    public function create()
    {
        
    }
}
