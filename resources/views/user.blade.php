@section('title')
    个人资料编辑
@stop
@include('header')
@include('nav')

<div class="empty" id="welcome">
    @if(Auth::user())
        <div class="columns col-oneline">
            <div class="column col-4">
                <div class="wecome-text">
                    <h2>欢迎您，{{Auth::user()->name}}</h2>
                    <h4>一套简易在线评测系统</h4>
                </div>
            </div>
            <div class="column col-8">
                <div class="welcome-panel user-edit">
                    {!!  Form::model($user,['url'=>'/user','method'=>'PATCH']) !!}
                    <div class="form-group padding20">
                        {!! Form::label('用户名*',null,["class"=>"form-label"]) !!}
                        {!! Form::text('name',null,["class"=>"form-input"]) !!}
                        {!! Form::label('邮箱*',null,["class"=>"form-label"]) !!}
                        {!! Form::text('email',null,["class"=>"form-input"]) !!}
                        {!! Form::label('学校*',null,["class"=>"form-label"]) !!}
                        {!! Form::text('school',null,["class"=>"form-input"]) !!}
                        {!! Form::label('密码*',null,["class"=>"form-label"]) !!}
                        {!! Form::password('password',["class"=>"form-input", "placeholder"=>"若非修改，请勿填写"]) !!}
                    </div>

                    <div class="form-group margin20">
                        {!! Form::submit('确认修改',["class"=>"btn btn-default btn-width"]) !!}
                    </div>
                    {!!  Form::close() !!}
                </div>
            </div>
        </div>

    @else
        <div class="columns col-oneline">
            <div class="column col-4">
                <div class="wecome-text">
                    <h2>Simple OJ</h2>
                    <h4>一套简易在线评测系统</h4>
                </div>
            </div>
            <div class="column col-8">

            </div>
        </div>
    @endif
</div>