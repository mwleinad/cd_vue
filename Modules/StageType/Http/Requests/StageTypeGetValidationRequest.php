<?php

namespace Modules\StageType\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class StageTypeGetValidationRequest
 * @package Modules\StageType\Http\Requests
 */
class StageTypeGetValidationRequest extends Request {
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
            /* 'stage_type_id' => 'string|required' */
        ];
    }
}
