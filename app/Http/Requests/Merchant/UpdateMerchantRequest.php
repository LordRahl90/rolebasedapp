<?php

namespace App\Http\Requests\Merchant;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Merchant\Merchant;

class UpdateMerchantRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Merchant::$rules;
    }
}
