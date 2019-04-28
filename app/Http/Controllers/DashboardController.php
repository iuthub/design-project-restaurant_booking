<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [

        ]);
    }
    public function services()
    {
        return view('services/services');
    }
    public function admin()
    {
        return view('admin/index');
    }
}
