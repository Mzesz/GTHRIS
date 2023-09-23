<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'min:3', 'max:100'],
            'last_name' => ['required', 'min:3', 'max:100'],
            'middle_name' => ['min:0', 'max:100'],
            'suffix' => ['min:0', 'max:10'],
            'nickname' => ['min:0', 'max:100'],
            'zip_code' => ['required', 'min:4'],
            'email' => ['required', 'email','max:100'],
            'telephone' => ['min:0','max:10'],
            'phone' => ['required', 'numeric','min:10'],
            'gender_id' => ['required', 'exists:genders,id'],
            'marital_status_id' => ['required', 'exists:marital_statuses,id'],
            'blood_type' => [ 'min:0', 'max:5'],
            'religion' => ['min:0', 'max:100'],
            'nationality' => ['min:0', 'max:100'],
            'height' => ['min:0', 'max:20'],
            'weight' => ['min:0', 'max:20'],
            'department_id' => ['required', 'exists:departments,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'birth_date' => ['required', 'date'],
            'date_hired' => ['required', 'date'],

        ];
    }
}
