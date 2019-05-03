<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    protected $food;
    /**
     * FoodController constructor.
     */
    public function __construct(
        Food $food
    )
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
        return view('food.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * throw Exception
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'price' => 'required|numeric|between:0,99.99',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->all();
        $imageName = time().random_int(1000, 99999). '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(
            public_path().'/upload/', $imageName
        );

        Arr::set($data, 'image', '/upload/' . $imageName);
        if($this->food->create($data)){
            return redirect('admin')->with('status', 'Food saved!');
        }else{
            return redirect('admin')->with('status', 'Food not saved!');
        }
        /*
         * Keyin qo'samiz
         * DB::beginTransaction();
        try {
            $this->food->create($request->all());
        } catch (Exception $e) {
            throw new Exception('Article was not saved to the database.');
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
