@section('title')
    排行总榜
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
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>学校名称</th>
                            <th>做题数</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($school as $key => $item)
                            <tr>

                                <td>{{$key}}</td>
                                <td>{{$item}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p style="margin-top: 15px">个人排名 = 等级*0.7 + 做题数*0.3 的排序</p>
                </div>
            </div>

        </div>
    </div>
@include('footer')
</body>
