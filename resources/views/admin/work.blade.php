@section('title')
    评测机工作列表
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
                        @foreach($work as $item)

                            <tr>
                                <td>{{$item->task->id}}</td>
                                <td><a href="/admin/question/{{$item->task->question->id}}" class="question-link">{{$item->task->question->id}} - {{$item->task->question->title}}</a></td>
                                <td>{{$item->task->question->star}}</td>
                                <td>{{$item->task->created_at}}</td>
                                <td>{{$item->task->user->id}} - {{$item->task->user->name}}</td>
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
                                            echo '<span style="color:coral">Time Limit Exceeded/span>';
                                            break;
                                        case '6':
                                            echo '<span style="color:orangered">Compile Error</span>';
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
