<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TableCompanyControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacompanies = companies::paginate(10);
        return view('company', compact('datacompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Create.Crcompany',[
            'title' => 'Mini CRM With Laravel | Crcompany'
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
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            'file' => 'required'
        ]);

        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'image|mimes:jpeg,bmp,png|dimensions:width=100,height=100' 
            ]);

            $data2 = array(
                'name' => $request->get('name'),
                "email" => $request->get('email'),
                "website" => $request->get('website'),
                "logo" => $request->file->store('post-images', 'public') );
            // $data = new companies ([
            //     "name" => $request->get('name'),
            //     "email" => $request->get('email'),
            //     "website" => $request->get('website'),
            //     "logo" => $request->file->store('post-images', 'public')
            // ]);
            // $data->save(); 
        }

        Mail::send('email.companycreated', $data2, function ($message) {
            $message->from('laraveltest@gmail.com');
            $message->to('virgostevanus@gmail.com');
            $message->subject('New Company Created');
        });
        
        companies::create($data2);
        return redirect('company')->with('success', 'New Company has been added');
  
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
        $peg2 = companies::findorfail($id);
        return view('Create.Edcompany', compact('peg2'), [
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
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            'file' => 'required'
        ]);
        $peg2 = companies::findorfail($id);
        $peg2->name = $request->input('name');
        $peg2->email = $request->input('email');
        $peg2->website = $request->input('website');
        $peg2->logo = $request->file->store('post-images', 'public');
        $peg2->update();
        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $peg2 = companies::findorfail($id);
        $peg2->delete();
        return back();
    }
}
