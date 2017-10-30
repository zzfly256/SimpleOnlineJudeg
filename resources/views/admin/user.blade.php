@section('title')
    用户管理
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
                            <th>ID</th>
                            <th>用户名</th>
                            <th>学校</th>
                            <th>等级</th>
                            <th>做题数</th>
                            <th>升级率</th>
                            <th>管理</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->school}}</td>
                                <td>{{$item->level}}</td>
                                <td>{{$item->total}}</td>
                                <td><?php $total = $item->total; $level = $item->level; if($level!=0){$result=($level/$total)*100;printf("%.2f",$result);}else{echo "0";} ?>%</td>
                                <td>
                                    <div class="input-group input-inline">
                                        <a class="btn" href="/admin/user/{{$item->id}}#form">编辑</a>
                                        {!!  Form::model($item,['url'=>'/admin/category/'.$item->id,'method'=>'DELETE']) !!}
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
