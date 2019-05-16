<?php

namespace App\Http\Controllers;

use App\Department;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $user = DB::table('staff')
        // ->join('department', 'department.user_id', 'staff.id')
        // ->select('staff.firstname', 'staff.select');
        // dd($user);
        $department = Department::all();
        return view('department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Staff::all();
        return view('department.create', compact('user'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $department = Department::create(request([
            'name',
            'discription',
            'user_id'
        ]));

        if($department){
            return back()->with('success', 'Department Created Successfully');    
        }

        return back()->with('error', 'An error occurred while trying to create a department');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $staff = Staff::all();
         $dept = Department::find($id);
        return view('department.show', compact(['dept','staff']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editDept = Department::find($id);
        return view('department.edit', compact('editDept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(department $department)
    {
        //
    }
}
