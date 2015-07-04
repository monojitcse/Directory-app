<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\students;
use Illuminate\Http\Request;

class Crud extends Controller {

    public function index (){
    return view('crud/index');
    }

    public function view (){
        return view('crud/view');
    }

    public function saveStudent(Request $request){
        $students = new students();
        $students->first_name = $request->input('first_name');
        $students->last_name = $request->input('last_name');
        $students->email = $request->input('email');
        $students->password = sha1( $request->input('password') );
        $students->address = $request->input('address');
        $students->save();
        return redirect ('/');
    }
}
