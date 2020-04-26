<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        {{ Form::model('user', ['route' => 'user.store', 'method' => 'post']) }}
        名前：{{ $user->name }}<br>
        メールアドレス：{{ $user->email }}<br>
        都道府県：{{ $prefecture->name }}<br>
        <br>
        <input type="submit" value="送信">


        {!! Form::input('hidden', 'name', $user->name) !!}
        {!! Form::input('hidden', 'email', $user->email) !!}
        {!! Form::input('hidden', 'prefecture_id', $user->prefecture_id) !!}

        {{ Form::close() }}
    </body>
</html>
