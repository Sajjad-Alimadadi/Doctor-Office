<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Requests;

use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Ship\Parents\Requests\Request as ParentRequest;

class UploadImageVisitOperationRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
//        'permissions' => '',
//        'roles'       => '',
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
//       'id' => '',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $visitId = $this->route('visit_id');
        if (Visit::query()->where('id', $visitId)->first() === null) {
            exit('');
        }
        return [
            'visit_id' => 'required|int|exists:visits,id',
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
            'visit_id' => $this->route('visit_id'),
        ]);
    }
}
