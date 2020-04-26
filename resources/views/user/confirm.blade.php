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
        好きな食べ物：{{ $favorite_food_name }}<br>
        <br>
        <input type="submit" value="送信">


        {!! Form::input('hidden', 'name', $user->name) !!}
        {!! Form::input('hidden', 'email', $user->email) !!}
        {!! Form::input('hidden', 'prefecture_id', $user->prefecture_id) !!}
        @foreach ($favorite_food_ids as $favorite_food_id)
            {!! Form::input('hidden', 'favorite_food_id[]', $favorite_food_id) !!}
        @endforeach

        {{ Form::close() }}
    </body>
</html>
