<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Requests;

use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Containers\LabSection\VisitContainer\Models\VisitImage;
use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Validation\ValidationException;

class DeleteVisitOperationRequest extends ParentRequest
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
        $id = $this->route('id');
        $getInfoVisit = Visit::query()->where('id', $id)->first();
        if ($getInfoVisit['file'] !== null) {
            throw ValidationException::withMessages(['file' => 'نسخه مورد نظر دارای ضمیمه می باشد ، ابتدا ضمیمه رو حذف نمایید']);
        }
        $getInfoVisitImage = VisitImage::query()->where('visit_id', $id)->get()->count();
        if ($getInfoVisitImage !== 0) {
            throw ValidationException::withMessages(['image' => 'نسخه مورد نظر دارای تعدادی تصاویر می باشد ، ابتدا تصاویر رو حذف نمایید']);
        }

        return [
            'id' => 'required|exists:visits,id'
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
            'id' => $this->route('id'),
        ]);
    }
}
