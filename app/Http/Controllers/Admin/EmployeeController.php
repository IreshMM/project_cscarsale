<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = User::where('level', 'employee')->get();

        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'title'             => 'required', 
            'first_name'        => 'required', 
            'last_name'         => 'required',
            'street_address'    => 'required',
            'city'              => 'required',
            'phone'             => 'required',
            'email'             => 'required',
            'password'          => 'required'
        ]);

        $data = User::filterValidFields($request->all());

        $employee = new User($data);
        $employee->level = 'employee';
        $employee->password = bcrypt($request->password);

        $employee->save();

        return response()->json($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate(['id_employee']);

        $employee = User::where('level', 'employee')->where('id', $request->id_employee)->first();

        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate(['id_employee']);

        $employee = User::where('level', 'employee')->where('id', $request->id_employee)->first();
        $data = User::filterValidFields($request->all());

        foreach ($data as $key => $value) {
            $employee[$key] = $value;
        }

        $employee->save();

        return response()->json($employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $request->validate(['id_employee']);

        $employee = User::where('level', 'employee')->where('id', $request->id_employee)->first();
        $employee->delete();

        return response()->json($employee);
    }
}