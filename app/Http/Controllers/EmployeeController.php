<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // employee list view
    public function index()
    {
        $employee = Employee::all();
        return view('backend.employee.index', compact('employee'));
    }
    // employee create form
    public function create(){
        return view('backend.employee.create');
    }
    // employee data store on database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'position' => ['required'],
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->office = $request->office;
        $employee->age = $request->age;
        $employee->start_date = $request->start_date;
        $employee->salary = $request->salary;
        $employee->save();
        return redirect()->route('employee.index')->with('message', 'Record inserted successfully.');
    }
    // employee edit form
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('backend.employee.edit', compact('employee'));
    }
    // employee data update from database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'position' => ['required'],
        ]);
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->office = $request->office;
        $employee->age = $request->age;
        $employee->start_date = $request->start_date;
        $employee->salary = $request->salary;
        $employee->save();
        return redirect()->route('employee.index')->with('message', 'Record updated successfully.');
    }
    // employee delete from database
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect()->route('employee.index')->with('message', 'Record deleted successfully.');
    }
}
