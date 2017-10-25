@section('title')
    题目管理
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
            <div class="column col-12 col-md-12">
                <div class="card padding30">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>标题</th>
                            <th>星级</th>
                            <th>时间</th>
                            <th>管理</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->star}}</td>
                                <td>{{$item->time}}</td>
                                <td>
                                <div class="input-group input-inline">
                                    <a class="btn" href="/admin/question/{{$item->id}}">详情</a>
                                    <a class="btn" style="margin-left:5px" href="/admin/question/{{$item->id}}/edit">编辑</a>
                                    {!!  Form::model($item,['url'=>'/admin/question/'.$item->id,'method'=>'DELETE']) !!}
                                    {!! Form::submit('删除',["class"=>"btn btn-delete","style"=>"margin-left:5px"]) !!}
                                    {!!  Form::close() !!}
                                </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@include('footer')
</body>
