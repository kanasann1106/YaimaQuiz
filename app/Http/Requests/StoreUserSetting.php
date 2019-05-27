<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserSetting extends FormRequest
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
      'old_password' => 'required',
      'password' => 'required|min:6',
      'password_confirmation' => 'required|confirmed',
    ];
  }

  public function messages()
  {
    return [
      'old_password.required'  => '入力してください',
      'uncorrect1.different' => '同じ内容の選択肢は入力できません。',
      'uncorrect2.different' => '同じ内容の選択肢は入力できません。',
      'image_name.mimes' => 'jpg, jpeg, pngタイプのファイルを指定してください。'
    ];
  }
}
