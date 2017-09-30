@section('title')
{{$ques_item->title}} 题目详情
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
                    <h4>{{$ques_item->title}} <small class="label">{{$ques_item->id}}</small></h4>
                    <hr>
                    <pre>{!! $ques_item->content !!}</pre>
                    <p>标准输入</p>
                    <pre>{{$ques_item->input}}</pre>
                    <p>标准结果</p>
                    <pre>{{$ques_item->result}}</pre>
                    <p>运行时间: <pre>{{$ques_item->time}}ms</pre></p>
                    <p>星级: <pre>{{$ques_item->star}}</pre></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
