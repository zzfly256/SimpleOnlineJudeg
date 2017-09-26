@section('title')
    用户注册
@stop
@include('header')
<body class="bg-grey">

<!-- vertical divider element with text -->
<div class="columns margin-width" id="login-panel">
    <div class="column">
        <div class="container">
            <h3 style="text-align: center">注册</h3>
            <hr>
        </div>
        {!!  Form::open(['url'=>'/register']) !!}
        <div class="form-group padding20">
            {!! Form::label('用户名*',null,["class"=>"form-label"]) !!}
            {!! Form::text('name',null,["class"=>"form-input"]) !!}
            {!! Form::label('邮箱*',null,["class"=>"form-label"]) !!}
            {!! Form::text('email',null,["class"=>"form-input"]) !!}
            {!! Form::label('学校*',null,["class"=>"form-label"]) !!}
            {!! Form::text('school',null,["class"=>"form-input"]) !!}
            {!! Form::label('密码*',null,["class"=>"form-label"]) !!}
            {!! Form::password('password',["class"=>"form-input"]) !!}
            {!! Form::label('确认密码*',null,["class"=>"form-label"]) !!}
            {!! Form::password('password_confirmation',["class"=>"form-input"]) !!}
        </div>

        <div class="form-group padding20">
            {!! Form::submit('注册',["class"=>"btn btn-default btn-width"]) !!}
        </div>
        {!!  Form::close() !!}
    </div>

</div>
</body>