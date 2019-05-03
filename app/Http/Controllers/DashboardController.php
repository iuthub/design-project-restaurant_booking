<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $food;
    protected $menu;

    /**
     * DashboardController constructor.
     * @param Food $food
     * @param Menu $menu
     */
    public function __construct(Food $food, Menu $menu)
    {
        $this->food = $food;
        $this->menu = $menu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'menu' => $this->food->with('menu')->get()
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
    public function login()
    {
        return view('admin/login');
    }
}
