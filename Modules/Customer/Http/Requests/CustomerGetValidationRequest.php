<?php

namespace Modules\Customer\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class CompanyGetValidationRequest
 * @package Modules\Company\Http\Requests
 */
class CustomerGetValidationRequest extends Request {
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'uuid' => 'sometimes|string|required'
        ];
    }
}