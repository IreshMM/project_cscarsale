<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        // return response()->json($employees);
        return view('admin.users.employee')->with('employees', $employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        $request->validate([ 
            'first_name'        => 'required',
            'last_name'         => 'required',
            'address'           => 'required',
            'dob'               => 'required',
            'gender'            => 'required',
            'nic'               => 'required',
            'email'             => 'required',
            'mobile'            => 'required',
            'landline'          => 'required',
            'bank_account'      => 'required',
            'branch'            => 'required',
            'position'          => 'required',
            'hire_date'         => 'required',
            'password'          => 'required',
            'confirm_password'  => 'required'
        ]);

        $data = User::filterValidFields($request->all());

        $employeeUser = new User($data);
        $employeeUser->level = 'employee';
        $employeeUser->street_address = $request->address;
        $employeeUser->city = ['Galle', 'Anuradhapura'][random_int(0, 1)];
        $employeeUser->phone = $request->mobile;
        $employeeUser->title = $request->gender == 'male' ? 'Mr' : 'Miss';
        $employeeUser->password = bcrypt($request->password);

        $employeeUser->save();

        $employeeData = Employee::filterValidFields($request->all());
        $employee = new Employee($employeeData);
        $employee->land_line = $request->landline;
        $employee->hired_date = $request->hire_date;
        $employee->id = $employeeUser->id;

        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee account created');
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

    public function showCreateForm() {
        return view('admin.users.addEmployee');
    }


    public function showUpdateForm(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);

        $user = User::find($request->id);
        $employee = Employee::find($request->id);

        return view('admin.users.updateEmp')->with(['user' => $user, 'employee' => $employee]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        $request->validate(['id' => 'required']);

        $user = User::where('level', 'employee')->where('id', $request->id)->first();
        $data = User::filterValidFields($request->all());
        // dd($user);

        foreach ($data as $key => $value) {
            $user[$key] = $value;
        }

        // dd($user);

        $user->save();

        $employee = Employee::find($request->id);
        $data = Employee::filterValidFields($request->all());

        foreach ($data as $key => $value) {
            $employee[$key] = $value;
        }

        $employee->save();

        return back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        // dd($request);
        $request->validate(['id']);

        $employee = User::where('level', 'employee')->where('id', $request->id)->first();
        $employee->delete();

        return back()->with('warning', 'Employee account has been deleted!');
    }
}