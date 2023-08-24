<?php

/*
|--------------------------------------------------------------------------
| Ship Helpers
|--------------------------------------------------------------------------
|
| Write only general helper functions here.
| Container specific helper functions should go into their own related Containers.
| All files under app/{section_name}/{container_name}/Helpers/ folder will be autoloaded by Apiato.
|
*/

use App\Containers\LabSection\VisitContainer\Models\VisitImage;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Containers\LabSection\AdminContainer\Models\Admin;

if (!function_exists('imageVisitsCount')) {
    function imageVisitsCount(int $id): int
    {
        return VisitImage::query()->where('visit_id', $id)->get()->count();
    }
}

if (!function_exists('smsDoctor')) {
    function smsDoctor(string $to, string $clinic, string $doctor, string $patient, string $url): string|bool
    {
        ini_set('soap.wsdl_cache_enabled', '0');
        return (new SoapClient('http://ippanel.com/class/sms/wsdlservice/server.php?wsdl'))->sendPatternSms(
            '5000125475',
            json_encode([$to]),
            'U9359510282',
            'Mahyar@1370',
            'klj5gpgyhrqcijj',
            compact('clinic', 'doctor', 'patient', 'url')
        );
    }
}

if (!function_exists('smsPatient')) {
    function smsPatient(string $to, string $clinic, string $name, string $url): string|bool
    {
        ini_set('soap.wsdl_cache_enabled', '0');
        return (new SoapClient('http://ippanel.com/class/sms/wsdlservice/server.php?wsdl'))->sendPatternSms(
            '5000125475',
            json_encode([$to]),
            'U9359510282',
            'Mahyar@1370',
            '3ylu2yygc6m4adb',
            compact('clinic', 'name', 'url')
        );
    }
}


if (!function_exists('patientInfo')) {
    function patientInfo(int $id): Model|Collection|Builder|array|null|string
    {
        $result = Patient::query()->find($id);
        return $result['name']." ".$result['family'];
    }
}

if (!function_exists('doctorInfo')) {
    function doctorInfo(int $id): Model|Collection|Builder|array|null|string
    {
        $result = Doctor::query()->find($id);
        return $result['name']." ".$result['family'];
    }
}

if (!function_exists('operationInfo')) {
    function operationInfo(int $id): Model|Collection|Builder|array|null|string
    {
        $result = Operation::query()->find($id);
        return $result['name']." ".$result['family'];
    }
}

if (!function_exists('adminInfo')) {
    function adminInfo(int $id): Model|Collection|Builder|array|null|string
    {
        $result = Admin::query()->find($id);
        return $result['name']." ".$result['family'];
    }
}
