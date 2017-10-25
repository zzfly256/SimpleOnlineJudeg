@section('title')
    {{$question->title}}
@stop
@include('header')
<body>
<div id="main-container" class="container">
    <div class="columns">
        <div class="sidebar">
            <h3>Simple.OJ</h3>

            @include('sidebar')

        </div>
        <div class="content">
            <div id="form" class="column col-12 col-md-12">
                <div class="card padding30">
                    <h4>{{$question->title}} <small class="label">{{$question->id}}</small></h4>
                    <hr>
                    <pre>{!! $question->content !!}</pre>

                    {!!  Form::open(['url'=>'/task/'.$question->id]) !!}
                    <div class="form-group">
                        {!! Form::label('内容',null,["class"=>"form-label"]) !!}
                        {!! Form::textarea('code',null,["class"=>"form-input", "placeholder"=>"请输入题目内容正文"]) !!}
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        {!! Form::submit('提交',["class"=>"btn btn-default"]) !!}
                    </div>
                    {!!  Form::close() !!}

                </div>

            </div>
        </div>

    </div>
</div>
@include('footer')
</body>
