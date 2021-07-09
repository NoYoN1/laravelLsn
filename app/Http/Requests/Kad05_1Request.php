<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kad05_1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'kad05_1') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'email',
            'pass' => 'required' //ルールが複数ある時は、| で連結する
        ];
    }
    public function messages()
    {
        return [
            'email.email' => 'メールアドレス形式で記述してください',
            'pass.required' => 'パスワードは必ず入力してください' // '項目名.ﾙｰﾙ名'=>'ﾒｯｾｰｼﾞ'
        ];
    }
}
