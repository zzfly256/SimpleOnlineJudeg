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
                            <th>用户名</th>
                            <th>学校</th>
                            <th>等级</th>
                            <th>做题数</th>
                            <th>升级率</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->school}}</td>
                                <td>{{$item->level}}</td>
                                <td>{{$item->total}}</td>
                                <td><?php $total = $item->total; $level = $item->level; if($level!=0){$result=($level/$total)*100;printf("%.2f",$result);}else{echo "0";} ?>%</td>
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
