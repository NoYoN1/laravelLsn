<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bcontent extends Model
{
    use SoftDeletes; //論理削除を行う場合は追加する。
    //当該ﾓﾃﾞﾙｸﾗｽと bcontents ﾃｰﾌﾞﾙを紐づける。命名規則に基づくため、なくても可
    protected $table = 'bcontents';
    protected $primaryKey = 'id'; //主キーの設定。デフォルトは id のため、省略可

    public static $rules = array(
        'title' => 'required',
        'contents' => 'required',
        'image_url' => 'image',
    );

    public static $messages = array(
        'title.required' => 'タイトルは必ず入力してください。',
        'contents.required' => '本文は必ず入力してください。',
        'image_url.image' => '写真・画像のファイルを選択してください。',
    );
}
