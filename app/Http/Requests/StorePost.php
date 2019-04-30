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
            'category_id' => 'required',
            'region_id' => 'required',
            'title' => 'required|max:255',
            'correct' => 'required|max:255|different:uncorrect1|different:uncorrect2',
            'uncorrect1' => 'required|max:255|different:correct|different:uncorrect2',
            'uncorrect2' => 'required|max:255|different:correct|different:uncorrect1',
            'explain_sentence' => 'required|max:255',
            'image_name' => 'max:10240|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'correct.different'  => '同じ内容の選択肢は入力できません。',
            'uncorrect1.different' => '同じ内容の選択肢は入力できません。',
            'uncorrect2.different' => '同じ内容の選択肢は入力できません。',
            'image_name.mimes'=> 'jpg, jpeg, pngタイプのファイルを指定してください。'
        ];
    }
}
