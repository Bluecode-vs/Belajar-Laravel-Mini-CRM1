<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;

class TablekaryawanControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakaryawan = employees::with('Rcompany')->paginate(10);
        return view('karyawan', compact('datakaryawan'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $comp = companies::all();
        return view('Create.Crkaryawan',compact('comp'),[
            'title' => 'Mini CRM With Laravel | Crkaryawan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'company_id' => 'required',
            'Email' => 'required',
            'Phone' => 'required'
           
        ]);
        employees::create([
            'First_Name' => $request->FirstName,
            'Last_Name' =>  $request->LastName,
            'company_id' =>  $request->company_id,
            'email'=>  $request->Email,
            'phone' =>  $request->Phone

        ]);
    
        return redirect('karyawan')->with('success', 'New Employee has been added');
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
        $comp = companies::all();
        $peg = employees::with('Rcompany')->findorfail($id);
        return view('Create.Edkaryawan', compact('peg', 'comp'), [
            'title' => 'Mini CRM With Laravel | Edit'
        ]);
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
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'company_id' => 'required',
            'Email' => 'required',
            'Phone' => 'required'
           
        ]);
        $peg = employees::findorfail($id);
        $peg->First_Name = $request->input('FirstName');
        $peg->Last_Name = $request->input('LastName');
        $peg->company_id = $request->input('company_id');
        $peg->email = $request->input('Email');
        $peg->phone = $request->input('Phone');
        $peg->update();
        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $peg = employees::findorfail($id);
        $peg->delete();
        return back();
    }
}
