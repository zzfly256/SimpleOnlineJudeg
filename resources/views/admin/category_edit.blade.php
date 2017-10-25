@section('title')
    题库管理
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
                            <th>名称</th>
                            <th>题目</th>
                            <th>排序</th>
                            <th>管理</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->question}}</td>
                                <td>{{$item->no}}</td>
                                <td>
                                <div class="input-group input-inline">
                                    <a class="btn" href="/admin/category/{{$item->id}}#form">编辑</a>
                                    {!!  Form::model($item,['url'=>'/admin/host/'.$item->id,'method'=>'DELETE']) !!}
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
            <div id="form" class="column col-12 col-md-12">
                <div class="card padding30">
                    {!!  Form::model($cat_item,['url'=>'/admin/category/'.$cat_item->id,'method'=>'PATCH']) !!}
                    <div class="form-group">
                        {!! Form::label('名称',null,["class"=>"form-label"]) !!}
                        {!! Form::text('name',$cat_item->name,["class"=>"form-input", "placeholder"=>"新建题库的名称"]) !!}
                        {!! Form::label('题目',null,["class"=>"form-label"]) !!}
                        {!! Form::text('question',$cat_item->question,["class"=>"form-input", "placeholder"=>"请输入该题库下题目的编号，使用英文逗号分隔开"]) !!}
                        {!! Form::label('排序',null,["class"=>"form-label"]) !!}
                        {!! Form::text('no',$cat_item->no,["class"=>"form-input", "placeholder"=>"请输入该题库显示的排序"]) !!}
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
