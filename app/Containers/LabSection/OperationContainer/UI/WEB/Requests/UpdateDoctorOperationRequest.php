<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Exception;

class UpdateDoctorOperationRequest extends ParentRequest
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
            '_token'       => 'nullable',
            'id'           => 'nullable',
            'doctorcode'   => 'nullable',
            'mobile'       => 'nullable|string|min:11|max:11|unique:doctors',
            'nationalcode' => 'nullable|string|min:10|max:10|unique:doctors',
            'name'         => 'nullable|string',
            'family'       => 'nullable|string',
            'birthday'     => 'nullable|string',
            'pass'         => 'nullable|string',
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
            '_token'       => $this->post('_token'),
            'id'           => $this->post('id'),
            'doctorcode'   => $this->post('doctorcode'),
            'mobile'       => $this->post('mobile'),
            'nationalcode' => $this->post('nationalcode'),
            'name'         => $this->post('name'),
            'family'       => $this->post('family'),
            'birthday'     => $this->post('birthday'),
            'startdate'    => $this->post('startdate'),
            'pass'         => $this->post('pass'),
        ]);
    }

}
