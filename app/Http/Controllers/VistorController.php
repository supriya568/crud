<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vistor;

class VistorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   return"hello";
    $vistors = vistor::all();
    return view('vistor.index', compact('vistors'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "hai";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 
    $request->validate([
        'purpose'=>'required',
        'name'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'address'=>'required',
        'date'=>'required',
        'in_time'=>'required'
    ]);
$vistors = new vistor;    
 $vistors->purpose = $request->get('purpose');
$vistors->name = $request->get( 'name');
$vistors->phone = $request->get('phone');
$vistors->email = $request->get( 'email');
$vistors->address = $request->get('address');
$vistors->date = $request->get('date');
$vistors->in_time = $request->get('in_time');
// dd($vistors);
$vistors->save();
// dd($vistors);
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
        $vistor = vistor::find($id);
        return view('vistor.edit', compact('vistor'));
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $vistor = Vistor::find($id);
    $vistor->update($request->all());
    return redirect()->route('vistor.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $example = Vistor::findOrFail($id);
        $example->delete();
        return redirect()->route('vistor.index');
    }
}
