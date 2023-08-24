<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Exception;
use Illuminate\Validation\ValidationException;

class CreateOperationRequest extends ParentRequest
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
        $pass = $this->post('pass');
        $pass2 = $this->post('pass2');
        if ($pass != $pass2) {
            throw ValidationException::withMessages(['password' => 'passwords doesnt match']);
        }

        return [
            '_token'       => 'required',
            'mobile'       => 'required|string|min:11|max:11|unique:operations',
            'nationalcode' => 'required|string|min:10|max:10|unique:operations',
            'name'         => 'required|string',
            'family'       => 'required|string',
            'birthday'     => 'required|string',
            'startdate'    => 'required|string',
            'pass'         => 'required|string',
            'pass2'        => 'required|string',
        ];
    }

    public function attributes(): array
    {
        return [
            'nationalcode' => 'کد ملی را وارد کنید',
            'mobile' => 'موبایل را وارد کنید',
            'name' => 'نام وارد کنید',
            'family' => 'فامیلی وارد کنید',
            'pass' => 'پسورد وارد کنید',
            'pass2' => 'تکرار پسورد وارد کنید',
            'birthday' => 'تولد وارد کنید',
            'startdate' => 'تاریخ شروع وارد کنید',
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
            'mobile'       => $this->post('mobile'),
            'nationalcode' => $this->post('nationalcode'),
            'name'         => $this->post('name'),
            'family'       => $this->post('family'),
            'birthday'     => $this->post('birthday'),
            'startdate'    => $this->post('startdate'),
            'pass'         => $this->post('pass'),
            'pass2'        => $this->post('pass2'),
        ]);
    }

}
