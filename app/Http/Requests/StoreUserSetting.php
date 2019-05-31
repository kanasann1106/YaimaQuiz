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
      'old_email' => 'required|dbemail',
      'email' => 'required|email|unique:users|same:email_confirmation',
      'email_confirmation' => 'required|email',
      'pass_auth' => 'required|min:6'
    ];
  }

  public function messages()
  {
    return [
      'email.same' => 'メールアドレスとメールアドレス再入力が一致しません。',
      'dbpass' => '現在のパスワードが違います。',
      'dbemail' => '現在のメールアドレスが違います。',
    ];
  }
}
