@section('title')
    评测任务列表
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
                            <th>评测号</th>
                            <th>标题</th>
                            <th>星级</th>
                            <th>日期</th>
                            <th>用户</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($task as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><a href="/admin/question/{{$item->question->id}}" class="question-link">{{$item->question->id}} - {{$item->question->title}}</a></td>
                                <td>{{$item->question->star}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->user->id}} - {{$item->user->name}}</td>
                                <td>
                                    <?php
                                    switch($item->status)
                                    {
                                        case '1':
                                            echo "Waiting";
                                            break;
                                        case '2':
                                            echo "Judging";
                                            break;
                                        case '3':
                                            echo '<span style="color:green">Accept</span>';
                                            break;
                                        case '4':
                                            echo '<span style="color:red">Wrong Answer</span>';
                                            break;
                                        case '5':
                                            echo '<span style="color:coral">Time limited</span>';
                                            break;

                                    }
                                    ?>
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
