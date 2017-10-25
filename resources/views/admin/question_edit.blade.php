@section('title')
    添加题目
@stop
@include('header')
<body>
<div id="main-container" class="container">
    <div class="columns">
        <div class="sidebar">
            <h3>Simple.OJ</h3>

            @include('admin.sidebar')

        </div>
        <div class="content">
            <div id="form" class="column col-12 col-md-12">
                <div class="card padding30">
                    {!!  Form::model($ques_item,['url'=>'/admin/question/'.$ques_item->id,'method'=>'PATCH']) !!}
                    <div class="form-group">
                        {!! Form::label('标题',null,["class"=>"form-label"]) !!}
                        {!! Form::text('title',null,["class"=>"form-input", "placeholder"=>"请输入题目标题"]) !!}
                        {!! Form::label('内容',null,["class"=>"form-label"]) !!}
                        {!! Form::textarea('content',null,["class"=>"form-input", "placeholder"=>"请输入题目内容正文"]) !!}
                        {!! Form::label('标准输入',null,["class"=>"form-label"]) !!}
                        {!! Form::textarea('input',null,["class"=>"form-input", "placeholder"=>"请输入系统检验的数据输入", "rows"=>"3"]) !!}
                        {!! Form::label('标准结果',null,["class"=>"form-label"]) !!}
                        {!! Form::textarea('result',null,["class"=>"form-input", "placeholder"=>"请输入系统标准输入的结果", "rows"=>"3"]) !!}
                        {!! Form::label('运行时间',null,["class"=>"form-label"]) !!}
                        {!! Form::text('time',null,["class"=>"form-input", "placeholder"=>"请输入系统评测时间限定"]) !!}
                        {!! Form::label('星级',null,["class"=>"form-label"]) !!}
                        {!! Form::text('star',null,["class"=>"form-input", "placeholder"=>"请输入题目星级"]) !!}
                        {!! Form::hidden('category','1') !!}
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        {!! Form::submit('提交',["class"=>"btn btn-default"]) !!}
                    </div>
                    {!!  Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@include('footer')
</body>
