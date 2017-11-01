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

                    {!!  Form::model($user_item,['url'=>'/admin/user/'.$user_item->id,'method'=>'PATCH','id'=>'form','style'=>'margin-top:10px' ]) !!}
                    <div class="form-group">
                        {!! Form::label('用户名',null,["class"=>"form-label"]) !!}
                        {!! Form::text('name',null,["class"=>"form-input", "placeholder"=>"请输入用户名"]) !!}
                        {!! Form::label('学校',null,["class"=>"form-label"]) !!}
                        {!! Form::text('school',null,["class"=>"form-input", "placeholder"=>"请输入学校"]) !!}
                        {!! Form::label('等级',null,["class"=>"form-label"]) !!}
                        {!! Form::text('level',null,["class"=>"form-input", "placeholder"=>"请输入用户等级"]) !!}
                        {!! Form::label('做题数',null,["class"=>"form-label"]) !!}
                        {!! Form::text('total',null,["class"=>"form-input", "placeholder"=>"请输入用户等级"]) !!}
                        {!! Form::label('权限',null,["class"=>"form-label"]) !!}
                        {!! Form::select('authority',['1'=>"普通用户",'2'=>"管理员"],Auth::user()->authority,["class"=>"form-input"]) !!}
                        {!! Form::hidden('category','1') !!}
                        {!! Form::label('密码*',null,["class"=>"form-label"]) !!}
                        {!! Form::password('password',["class"=>"form-input", "placeholder"=>"若非修改，请勿填写"]) !!}
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
