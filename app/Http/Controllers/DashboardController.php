<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin' => '1'])) {
                //echo "Success"; die;
                /*Session::put('adminSession',$data['email']);*/
                return redirect('/admin');
            }else{
                //echo "failed"; die;
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin/login');
    }

    public function logout(){
        Auth::logout(); // logout user
        return redirect('/admin')->with('flash_message_success','Logged out Successfully');
    }
}
