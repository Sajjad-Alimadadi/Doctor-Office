<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Cassandra\Exception\ValidationException;
use App\Containers\LabSection\AdminContainer\Models\Admin;
use Exception;

class CheckForLoginAdminRequest extends ParentRequest
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
//        'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
//        'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $mobile = $this->post('mobile');
        $pass = md5($this->post('pass'));

        $info = Admin::query()->where('mobile',$mobile)->where('pass',$pass)->first();

        if ($info === null) {
            throw \Illuminate\Validation\ValidationException::withMessages(['user' => 'کاربری یافت نشد']);
        }

        return [
            '_token' => 'required',
            'mobile' => 'required',
            'pass'   => 'required'
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
            '_token' => $this->post('_token'),
            'mobile' => $this->post('mobile'),
            'pass'   => $this->post('pass'),
        ]);
    }
}
