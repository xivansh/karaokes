<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {!! Form::open(['route' => 'tes.store']) !!}
    <div class="form-group">
        <div class="justify-content-center">
            {!! form::label('email', 'Email address :', ['name' => 'email']) !!}
            {!! form::text('email') !!}
            {!! form::label('password', 'Password :', ['name' => 'pass']) !!}
            {!! form::text('pass') !!}
            {!! form::button('Submit', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</body>

