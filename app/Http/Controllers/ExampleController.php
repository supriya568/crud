<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExampleCrud;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return"hello";
        $examples = ExampleCrud::all();
        // dd($example);
        return view('example.index', compact('examples')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $request->validate([
        'first_name' => 'required',
        'last_name'=>'required',
        'gender' =>'required',
        'qualification'=>'required'
     ]);

     $example = new ExampleCrud;
     $example->first_name = $request->get('first_name');
     $example->last_name = $request->get('last_name'); 
     $example->gender = $request->get('gender');
     $example->qualification = $request->get('qualification');
     $example->save();
    //  return "ok";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $example = ExampleCrud::find($id);
        return view('example.edit', compact('example'));
    }

    public function update(Request $request, $id)
    {
        $example = ExampleCrud::find($id);
        $example->update($request->all());
        return redirect()->route('example.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $example = ExampleCrud::find($id);
    $example->delete();
    return redirect()->route('example.index');
}

}
