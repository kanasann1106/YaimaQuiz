<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
        return [
            'title'=>'required|max:255',
            'correct' => 'required|max:255',
            'uncorrect1' => 'required|max:255',
            'uncorrect2'=>'required|max:255',
            'explain_sentence' => 'required|max:255',
            'image_name'=>'required|max:10240|mimes:jpg,jpeg,png',
        ];
    }
}
