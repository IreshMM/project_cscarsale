<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class employeeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        //$employee = cscarsale::table('employee');
        return view('employee-mgt/index')->with('employee',$employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $employee = new Employee;
        $employee->first_name->request->input('first_name');
        $employee->last_name->$request->input('last_name');
        $employee->address->$request->input('address');
        $employee->dob->$request->input('dob');
        $employee->nic->$request->input('nic');
        $employee->username_email->$request->input('userName');
        $employee->password->$request->input('password');
        $employee->position->$request->input('position');
        $employee->hire_date->$request->input('hire_date');
        $employee->gender->$request->input('gender');
        $employee->mobile->$request->input('mobile');
        $employee->land_line->$request->input('landline');
        $employee->email->$request->input('email');
       
        $employee->bank_account->$request->input('bank_account');
        $employee->branch->$request->input('branch');
        $employee->save();

        return redirect('/employee-mgt')->with('success', 'Information has been added');
    
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
        $employee =Employee::find($id);
        return view('employee-mgt.view',compact('employee',$employee));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee =Employee::find($id);
        return view('employee-mgt.create',compact('employee',$employee));
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
        $employee->first_name->request->input('first_name');
        $employee->last_name->$request->input('last_name');
        $employee->address->$request->input('address');
        $employee->dob->$request->input('dob');
        $employee->nic->$request->input('nic');
        $employee->username_email->$request->input('userName');
        $employee->password->$request->input('password');
        $employee->position->$request->input('position');
        $employee->hire_date->$request->input('hire_date');
        $employee->gender->$request->input('gender');
        $employee->mobile->$request->input('mobile');
        $employee->land_line->$request->input('landline');
        $employee->email->$request->input('email');
       
        $employee->bank_account->$request->input('bank_account');
        $employee->branch->$request->input('branch');
        $employee->save();

        return redirect('/employee-mgt')->with('success', 'Information has been added');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Employee::where('id', $id)->delete();
        // return redirect()->intended('/emp');
         $employee = Employee::find($id);
         $employee->delete();

        return redirect('/employee-mgt')->with('success', 'Stock has been deleted Successfully');
    }
}
