<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
class StudentCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::orderBy('id', 'asc')->paginate(5);
        return view('students.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'qualification' => 'required',
            'course' => 'required',
            'reason' => 'required',
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->email = $request->email;
        $student->qualification = $request->qualification;
        $student->course = $request->course;
        $student->reason = $request->reason;

        $student->save();

        return redirect()->route('students.succes')->with('success', 'Register successfull.Thank you!');
    }

    /**
     * Show the success page.
     *
     * @return \Illuminate\Http\Response
     */
    public function succes()
    {
        return view('students.succes');
    }
/**
* Display the specified resource.
*
* @param  \App\Student  $Student
* @return \Illuminate\Http\Response
*/
public function show(Student $Student)
{
return view('students.show',compact('Student'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Student  $Student
* @return \Illuminate\Http\Response
*/
public function edit(Student $Student)
{
return view('students.edit',compact('Student'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Student  $Student
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
    'name' => 'required',
    'dob' => 'required',
    'gender' => 'required',
    'address' => 'required',
    'contact' => 'required',
    'email' => 'required',
    'qualification' => 'required',
    'course' => 'required',
    'reason' => 'required',
    
]);
$Student = Student::find($id);
$Student->name = $request->name;
$Student->dob = $request->dob;
$Student->gender = $request->gender;
$Student->address = $request->address;
$Student->contact = $request->contact;
$Student->email = $request->email;
$Student->qualification = $request->qualification;
$Student->course = $request->course;
$Student->reason = $request->reason;

$Student->save();
return redirect()->route('students.index')
->with('success','Student Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Student  $Student
* @return \Illuminate\Http\Response
*/
public function destroy(Student $Student)
{
$Student->delete();
return redirect()->route('students.index')
->with('success','Student has been deleted successfully');
}
}