<header class="navbar">
    <section class="navbar-section">
        <a href="/" class="navbar-brand mr-2">Simple.OJ</a>
        <div class="dropdown">
            <a href="#" class="btn btn-link dropdown-toggle" tabindex="0">
                在线评测<i class="icon icon-caret"></i>
            </a>
            <!-- menu component -->
            <ul class="menu">
                <?php
                    $cat = \App\Category::orderBy("no","desc")->get();
                    foreach ($cat as $item)
                    {?>
                        <li class="menu-item"><a href="/category/{{$item->id}}" class="btn btn-link">{{$item->name}}</a></li>
                    <?php }
                ?>
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