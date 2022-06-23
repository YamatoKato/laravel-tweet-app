<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            /**
             * requiredは必須にする
             * rulesメソッドは配列を返す。
             * keyが投稿されるリクエストBodyのkeyに対応（<textarea name=XXX>）
             * valueはLaravelのバリデーションルールの記述
             */
            'tweet' => 'required|max:140'
        ];
    }

    // Requestクラスのuser関数で今自分がログインしているユーザーが取得できる
    public function userId(): int
    {
        return $this->user()->id;
    }

    public function tweet(): string
    {
        //inputメソッドを利用して第一引数に取得する名前(name=)
        return $this->input('tweet');
    }
}
