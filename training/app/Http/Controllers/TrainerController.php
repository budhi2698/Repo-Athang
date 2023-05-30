<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['trainers'] = Trainer::orderBy('id', 'asc')->paginate(5);
        return view('trainers.viewed', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainers.create');

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
            'name' => 'required',
            'date' => 'required',
            'title' => 'required',
            'grade' => 'required',
            'objective' => 'required',
            'materials' => 'required',
            'theory' => 'required',
            'practical' => 'required',
            'homework' => 'required',
        ]);

        $trainer = new Trainer;
        $trainer->name = $request->name;
        $trainer->date = $request->date;
        $trainer->title = $request->title;
        $trainer->grade = $request->grade;
        $trainer->objective = $request->objective;
        $trainer->materials = $request->materials;
        $trainer->theory = $request->theory;
        $trainer->practical = $request->practical;
        $trainer->homework = $request->homework;

        $trainer->save();
        return redirect()->route('trainers.index')->with('success', 'Register successfull.Thank you!');
    }

  /**
* Display the specified resource.
*
* @param  \App\Trainer  $Trainer
* @return \Illuminate\Http\Response
*/
    public function show(Trainer $trainer)
    {
        return view('trainers.show',compact('Trainer'));
    }

   /**
* Show the form for editing the specified resource.
*
* @param  \App\Trainer  $Trainer
* @return \Illuminate\Http\Response
*/
public function edit(Trainer $Trainer)
{
return view('trainers.edit',compact('Trainer'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Trainer  $Trainer
* @return \Illuminate\Http\Response
*/
    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'title' => 'required',
            'grade' => 'required',
            'objective' => 'required',
            'materials' => 'required',
            'theory' => 'required',
            'practical' => 'required',
            'homework' => 'required',
        ]);

        $trainer = new Trainer;
        $trainer->name = $request->name;
        $trainer->date = $request->date;
        $trainer->title = $request->title;
        $trainer->grade = $request->grade;
        $trainer->objective = $request->objective;
        $trainer->materials = $request->materials;
        $trainer->theory = $request->theory;
        $trainer->practical = $request->practical;
        $trainer->homework = $request->homework;
        $trainer->save();
return redirect()->route('trainers.index')
->with('success','trainer Has Been updated successfully');

    }
/**
* Remove the specified resource from storage.
*
* @param  \App\Trainer  $Trainer
* @return \Illuminate\Http\Response
*/
public function destroy(Trainer $Trainer)
{
$Trainer->delete();
return redirect()->route('trainers.index')
->with('success','Trainer has been deleted successfully');
}

}
