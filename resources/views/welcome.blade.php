@section('title')
欢迎来到在线评测系统
@stop
@include('header')
<header class="navbar">
    <section class="navbar-section">
        <a href="#" class="navbar-brand mr-2">Simple.OJ</a>
        <div class="dropdown">
            <a href="#" class="btn btn-link dropdown-toggle" tabindex="0">
               在线评测<i class="icon icon-caret"></i>
            </a>
            <!-- menu component -->
            <ul class="menu">
                <li class="menu-item"><a href="/home" class="btn btn-link">题库1</a></li>
                <li class="menu-item"><a href="/home" class="btn btn-link">题库2</a></li>
            </ul>
        </div>
        <a href="#" class="btn btn-link">排行榜</a>
    </section>
    <section class="navbar-section">
        @if(Auth::user())
            {!!  Form::open(['url'=>'/logout']) !!}
                {!! Form::submit('注销',["class"=>"btn btn-default"]) !!}
            {!!  Form::close() !!}
        @else
            {!!  Form::open(['url'=>'/login']) !!}
            <div class="input-group input-inline">


                    {!! Form::text('email',null,["class"=>"form-input","placeholder"=>"Email"]) !!}

                    {!! Form::password('password',["class"=>"form-input","placeholder"=>"Password"]) !!}

                    {!! Form::submit('登录',["class"=>"btn btn-default"]) !!}
                    <a href="/register" class="btn btn-link input-group-btn">注册</a>

            </div>
            {!!  Form::close() !!}
            @endif
    </section>
</header>

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
                                <p><a href="">点击修改</a></p>
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