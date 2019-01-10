<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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
        $validator = Validator::make($request->all(), [
       // $request->validate([ 
            'first_name'        => 'required',
            'last_name'         => 'required',
            'street_address'    => 'required',
            'dob'               => 'required|',
            'gender'            => 'required',
            'nic'               => 'required|regex:/^[0-9]{9}[vVxX]$/',
            'email'             => ['required', 'string',  'max:255', 'unique:users'],
            'mobile'            => 'required|digits:10',
            'landline'          => 'required|digits:10',
            'bank_account'      => 'required',
            'branch'            => 'required',
            'position'          => 'required',
            'hire_date'         => 'required',
            'password'          => 'required|min:6',
            'confirm_password'  => 'required'
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }

       // $data = User::filterValidFields($request->all());

       // $employeeUser = new User($data);
        $employeeUser = new User;
        $employeeUser->first_name = $request->first_name;
        $employeeUser->last_name = $request->last_name;
        $employeeUser->email = $request->email;
        $employeeUser->level = 'employee';
        $employeeUser->street_address = $request->street_address;
        $employeeUser->city = $request->city;
        $employeeUser->phone = $request->mobile;
        $employeeUser->title = $request->gender == 'male' ? 'Mr' : 'Miss';
        $employeeUser->password = bcrypt($request->password);

        $employeeUser->save();

       // $employeeData = Employee::filterValidFields($request->all());
       // $employee = new Employee($employeeData);
        $employee = new Employee;
        $employee->land_line = $request->landline;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->nic = $request->nic;
        $employee->bank_account = $request->bank_account;
        $employee->branch = $request->branch;
        $employee->position = $request->position;
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

        return redirect()->route('employee.index')->with('success', 'Successfully updated');
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