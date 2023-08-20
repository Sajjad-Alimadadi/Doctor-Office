<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Exception;

class CreateVisitRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
//        'permissions' => '',
//        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     * @throws Exception
     */
    public function rules(): array
    {
        return [
            '_token'      => 'required',
            'doctor_id'   => 'required|integer|exists:doctors,doctorcode',
            'patient_id'  => 'required|string|exists:patients,nationalcode',
            'service_id'  => 'required|integer|exists:services,id',
            'date'        => 'required|string',
            'description' => 'required|string',
            'file'        => 'nullable|mimes:jpg,jpeg,png,pdf,zip|max:10240',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            '_token'      => $this->post('_token'),
            'doctor_id'   => $this->post('doctor_id'),
            'patient_id'  => $this->post('patient_id'),
            'service_id'  => $this->post('service_id'),
            'date'        => $this->post('date'),
            'description' => $this->post('description'),
            'file'        => $this->file('file'),
        ]);
    }

}
