<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::all();
        // return view('backend.employee.index',compact('employees'));
        $employees = Employee::latest()->paginate(5);

        return view('backend.employee.index',compact('employees'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Add validation rules for the image
        ]);

        // Store employee
        $employees = new Employee();
        $employees->name = $request->input('name');
        $employees->designation = $request->input('designation');
        $employees->about = $request->input('about');
        $employees->email = $request->input('email');

        // Handle file upload (if applicable)
        if ($request->hasAny('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $fileName); // Move the uploaded file to a public directory
            $employees->image = $fileName; // Store the file name in the database
        }

        // Save the employee record
        $employees->save();

        return redirect()->route('admin.employee');
    }


    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
