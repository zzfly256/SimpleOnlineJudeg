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
                    <p>运行时间: <pre>{{$question->time}}ms</pre></p>
                    <p>星级: <pre>{{$question->star}}</pre></p>
                    <a class="btn" style="margin-top: 20px" href="/question/{{$question->id}}/submit">提交</a>
                </div>


            </div>
        </div>

        </div>
    </div>
@include('footer')
</body>
