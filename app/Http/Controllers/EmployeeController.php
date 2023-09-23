<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\Employee;
use App\Tables\Employees;
use App\Models\Department;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\FormBuilder\Date;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\FormBuilder\Submit;
use App\Http\Requests\CreateEmployeeRequest;
use App\Models\Gender;
use App\Models\Marital_status;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.employees.index', [
            'employees' => Employees::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $form = SpladeForm::make()
       ->action(route('admin.employees.store'))
       ->fields([
        Input::make('first_name')->label('First Name'),
        Input::make('last_name')->label('Last Name'),
        Input::make('middle_name')->label('Middle Name'),
        Input::make('suffix')->label('Suffix'),
        Input::make('nickname')->label('Nickname'),
        Input::make('email')->label('Email'),
        Input::make('telephone')->label('Telephone No.'),
        Input::make('phone')->label('Phone No.'),
        Select::make('gender_id')
        ->label('Gender')
        ->options(Gender::pluck('name', 'id')->toArray()),
        Date::make('birth_date')->label('Birthdate'),
        Select::make('marital_status_id')
        ->label('Marital Status')
        ->options(Marital_status::pluck('name', 'id')->toArray()),
        Input::make('blood_type')->label('Blood Type'),
        Input::make('zip_code')->label('Zip Code'),
        Select::make('department_id')
        ->label('Choose a department')
        ->options(Department::pluck('name', 'id')->toArray()),
        Select::make('city_id')
        ->label('Choose a City')
        ->options(City::pluck('name', 'id')->toArray()),
        Input::make('religion')->label('Religion'),
        Input::make('nationality')->label('Nationality'),   
        Input::make('height')->label('Height(cm)'),
        Input::make('weight')->label('Weight(kg)'),
        Date::make('date_hired')->label('Date hired'),
        Submit::make()->label('SAVE')

       ])->class('p-4 bg-white rounded-md space-y-1 grid ');
       return view('admin.employees.create', [
        'form' => $form
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEmployeeRequest $request)
    {
        $city = City::findOrFail($request->city_id);
        Employee::create(array_merge($request->validated(),[
            'country_id' => $city->state->country_id,
            'state_id' => $city->state_id,

        ]));

        Splade::toast('Employee Created')->autoDismiss(3);

        return to_route('admin.employees.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $form = SpladeForm::make()
       ->action(route('admin.employees.update', $employee))
       ->method('PUT')
       ->fields([
        Input::make('first_name')->label('First Name'),
        Input::make('last_name')->label('Last Name'),
        Input::make('middle_name')->label('Middle Name'),
        Input::make('suffix')->label('Suffix'),
        Input::make('nickname')->label('Nickname'),
        Input::make('email')->label('Email'),
        Input::make('telephone')->label('Telephone No.'),
        Input::make('phone')->label('Phone No.'),
        Select::make('gender_id')
        ->label('Gender')
        ->options(Gender::pluck('name', 'id')->toArray()),
        Date::make('birth_date')->label('Birthdate'),
        Select::make('marital_status_id')
        ->label('Marital Status')
        ->options(Marital_status::pluck('name', 'id')->toArray()),
        Input::make('blood_type')->label('Blood Type'),
        Input::make('zip_code')->label('Zip Code'),
        Select::make('department_id')
        ->label('Choose a department')
        ->options(Department::pluck('name', 'id')->toArray()),
        Select::make('city_id')
        ->label('Choose a City')
        ->options(City::pluck('name', 'id')->toArray()),
        Input::make('religion')->label('Religion'),
        Input::make('nationality')->label('Nationality'),
        Input::make('height')->label('Height(cm)'),
        Input::make('weight')->label('Weight(kg)'),
        Date::make('date_hired')->label('Date hired'),
        Submit::make()->label('SAVE')

       ])
       ->fill($employee)
       ->class('p-4 bg-white rounded-md space-y-2 grid grid-rows-3 gap-6 grid-cols-4');
       return view('admin.employees.edit', [
        'form' => $form
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateEmployeeRequest $request, Employee $employee)
    {
        $city = City::findOrFail($request->city_id);
        $employee->update(array_merge($request->validated(),[
            'country_id' => $city->state->country_id,
            'state_id' => $city->state_id,

        ]));

        Splade::toast('Employee Updated')->autoDismiss(3);

        return to_route('admin.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        Splade::toast('Employee Deleted')->autoDismiss(3);

        return back();
    }
}
