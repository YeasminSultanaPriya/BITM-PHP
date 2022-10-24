<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teacher, $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teachers.index', [
            'teachers' => Teacher::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required',
            'email'         => 'required|unique:users,email_address',
            'phone'         => 'required',
            'address'       => 'required',
            'description'   => 'required',
            'image'         => 'required|image',
            'status'        => 'required',

        ],[
            // 'columnName.condition' => 'custom message'
            'image.image' => 'File format is not supported. Please insert an image',
            'image.required' => "Please upload teacher's image"
        ]);
        $this->user = User::createTeacherAccount($request);
        Teacher::createOrUpdateTeacher($request, $this->user->id);
        return redirect()->back()->with('success','Teacher created successfully');
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
        return view('admin.teachers.edit',[
            'teacher' => Teacher::find($id),
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
        return redirect('/teachers')->with('success','Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teacher= Teacher::find($id);
        $this->user = User::find($this->teacher->user_id);
        $this->user->delete();

        if (file_exists($this->teacher->image)){
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return redirect()->back()->with('success','Teacher deleted successfully');

    }
}
