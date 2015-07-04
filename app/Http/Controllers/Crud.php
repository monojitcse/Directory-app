<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\students;
use Illuminate\Http\Request;
use Session;

class Crud extends Controller {

    public function index (){
    return view('crud/index');
    }

    public function view (){
        $students = Students::paginate(2);
        return view('crud/view')->with('students', $students);
    }

    public function saveStudent(Request $request){
        $students = new students();
        $students->first_name = $request->input('first_name');
        $students->last_name = $request->input('last_name');
        $students->email = $request->input('email');
        $students->password = sha1( $request->input('password') );
        $students->address = $request->input('address');
        $students->save();
        Session::flash('message', 'Students info save successfully');
        return redirect ('/');
    }

    public function delete($id){
        Students::find($id)->delete();
        return redirect('/view');
    }

    public function edit($id){
        $student = Students :: find($id);
        return view('crud/edit')->with('student',$student);
    }

    public function updateStudent(Request $request){
        $id = $request->input('id');
        $student = Students::find($id);
        $student->first_name = $request->input('first_name', 50);
        $student->last_name = $request->input('last_name', 50);
        $student->email = $request->input('email', 50);
        $student->address = $request->input('address');
        $student->save();
        Session::flash('message', 'Students info update successfully');
        return redirect('/view');
    }

}
