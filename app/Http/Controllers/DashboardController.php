<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $food;

    /**
     * DashboardController constructor.
     * @param Food $food
     */
    public function __construct(Food $food)
    {
        $this->food = $food;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'foods' => $this->food->all()->toArray()
        ]);
    }
    public function order()
    {
        return view('order/index');
    }
    public function admin()
    {
        return view('admin/index', [
            'foods' => $this->food->all()->toArray()
        ]);
    }
}
