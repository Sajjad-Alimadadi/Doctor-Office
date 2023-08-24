<?php

namespace App\Ship\Parents\Controllers;

use Apiato\Core\Abstracts\Controllers\WebController as AbstractWebController;
use Apiato\Core\Exceptions\IncorrectIdException;
use App\Ship\Parents\Requests\Request;

abstract class WebController extends AbstractWebController
{
    public function sanitize(Request $request, array $fields): array
    {
        try {
            $data = array_filter($request->sanitizeInput($fields), fn($value) => trim($value) !== '');
            foreach ($fields as $key => $value) {
                if (trim($value) !== '') {
                    $data[$key] = $value;
                }
            }
            return $data;
        } catch (IncorrectIdException) {
            return [];
        }
    }
}
