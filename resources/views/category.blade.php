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

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->question}}</td>
                                <td>{{$item->no}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
