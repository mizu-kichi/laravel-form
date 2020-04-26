<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        {{ Form::model('user', ['route' => 'user.confirm', 'method' => 'post']) }}
        名前：{!! Form::input('text', 'name') !!}<br>
        メールアドレス：{!! Form::input('text', 'email') !!}<br>
        都道府県：{!! Form::select('prefecture_id', $prefectures) !!}<br>
        <br>
        <input type="submit" value="確認">


        {{ Form::close() }}
    </body>
</html>
