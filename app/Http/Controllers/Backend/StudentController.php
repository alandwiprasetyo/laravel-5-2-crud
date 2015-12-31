<?php

namespace App\Http\Controllers\Backend;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('student.index', ['students'=>$students]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('student.create')
                ->withErrors($validator)
                ->withInput();
        }

        $data = new Student();
        $data->full_name = \Request::input('full_name');
        $data->email = \Request::input('email');
        $data->phone = \Request::input('phone');
        $data->address = \Request::input('address');
        $data->save();
        return Redirect('student');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('student.single', ['student'=>$student]);
    }

    public function edit($id)
    {
        return view('student.edit', ['student'=>Student::find($id)]);
    }

    public function update($id)
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ];

        $validator = \Validator::make(\Request::all(), $rules);
        if($validator->fails())
            return Redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        $data = Student::find($id);
        $data->full_name = \Request::input('full_name');
        $data->email = \Request::input('email');
        $data->phone = \Request::input('phone');
        $data->address = \Request::input('address');
        $data->save();
        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('student.index');
    }

}
