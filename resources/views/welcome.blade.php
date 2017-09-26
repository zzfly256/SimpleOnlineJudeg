@section('title')
欢迎来到在线评测系统
@stop
@include('header')
@include('nav')

<div class="empty" id="welcome">
    @if(Auth::user())
        <div class="columns col-oneline">
            <div class="column col-4">
                <div class="wecome-text">
                    <h2>欢迎您，{{Auth::user()->name}}</h2>
                    <h4>一套简易在线评测系统</h4>
                </div>
            </div>
            <div class="column col-8">
                <div class="welcome-panel">
                    <div class="container">
                        <div class="columns">
                            <div class="column col-4">
                                <small>等级</small>
                                <p>{{Auth::user()->level}}</p>
                            </div>
                            <div class="column col-3">
                                <small>做题数</small>
                                <p>{{Auth::user()->total}}</p>
                            </div>
                            <div class="column col-3">
                                <small>升级率</small>
                                <p><?php $total = Auth::user()->total; $level = Auth::user()->level; if($level!=0){echo ($level/$total)*100;}else{echo "0";} ?>%</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="columns">
                            <div class="column col-6">
                                <small>邮箱</small>
                                <p>{{Auth::user()->email}}</p>
                            </div>
                            <div class="column col-4">
                                <small>学校</small>
                                <p>{{Auth::user()->school}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="columns">
                            <div class="column col-4">
                                <small>排名</small>
                                <p>1</p>
                            </div>
                            <div class="column col-4">
                                <small>个人资料</small>
                                <p><a href="/user">点击修改</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        <div class="columns col-oneline">
            <div class="column col-4">
                <div class="wecome-text">
                    <h2>Simple OJ</h2>
                    <h4>一套简易在线评测系统</h4>
                </div>
            </div>
            <div class="column col-8">

            </div>
        </div>
    @endif
</div>