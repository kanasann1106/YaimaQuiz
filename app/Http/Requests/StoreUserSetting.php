<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use App\Providers\ValidatorServiceProvider;

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
      'old_password' => 'required|dbpass',
      'password' => 'required|min:6|confirmed',
      'password_confirmation' => 'required',
    ];
  }

  public function messages()
  {
    return [
      'dbpass' => '現在のパスワードが違います。',
    ];
  }
}
