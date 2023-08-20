<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Exception;

class CreateVisitImageRequest extends ParentRequest
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
            '_token'   => 'required',
            'visit_id' => 'required|int',
            'image'    => 'required|mimes:jpg,jpeg,png|max:10240',
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
            '_token'   => $this->post('_token'),
            'visit_id' => $this->route('visit_id'),
            'image'    => $this->file('file'),
        ]);
    }

}
