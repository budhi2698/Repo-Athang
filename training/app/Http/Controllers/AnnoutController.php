<?php

namespace App\Http\Controllers;

use App\Models\Annouts;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AnnoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['annouts'] = Annouts::orderBy('id', 'asc')->paginate(10);
        
        return view('annouts.index', $data);
      
    }

      /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
        public function create()
        {
            return view('annouts.create');
        }


  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);

        $annout = new Annouts;

        $annout->title = $request->title;

        if ($request->hasFile('image')) {
            $annoutPath = $request->file('image')->store('public/storage');
            $annout->image = $annoutPath;
        }
        $annout->description = $request->description;
        $annout->save();

        return redirect()->route('annouts.index')->with('success', 'Create successful.');
    }
     
    /**
    * Display the specified resource.
    *
    * @param  \App\Annouts  $annout
    * @return \Illuminate\Http\Response
    */
    public function show(Annouts $annout)
    {
    return view('annouts.show',compact('annout'));
    } 
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Annouts  $annout
    * @return \Illuminate\Http\Response
    */
    public function edit(Annouts $annout)
    {
    return view('annouts.edit',compact('annout'));
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Annouts  $annout
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
        ]);
    
        $annout = Annouts::findOrFail($id); // Fetch the announcement record

        $annout->title = $request->title;
        // $annout->image = $request->image;
        $annout->description = $request->description;
        $annout->save();
    
        return redirect()->route('annouts.index')->with('success', 'Updated successfully.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\AnnoutS  $annout
    * @return \Illuminate\Http\Response
    */
    public function destroy(Annouts $annout)
    {
    $annout->delete();
    return redirect()->route('annouts.index')
    ->with('success','Student has been deleted successfully');
    }
    }

   

