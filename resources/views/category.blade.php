@section('title')
    {{$category->name}} 题目
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
            <div class="column col-12 col-md-12">
                <div class="card padding30">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>标题</th>
                            <th>星级</th>
                            <th>时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question as $item)

                            <tr>

                                <td>{{$item->id}}</td>
                                <td><a href="/question/{{$item->id}}" class="question-link">{{$item->title}}</a></td>
                                <td>{{$item->star}}</td>
                                <td>{{$item->time}}</td>

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
