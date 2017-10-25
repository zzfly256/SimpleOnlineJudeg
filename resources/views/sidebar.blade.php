<ul class="sidebar-menu">
    <?php
    $cat = \App\Category::orderBy("no","desc")->get();
    foreach ($cat as $item)
    {?>
    <li><a href="/category/{{$item->id}}">{{$item->name}}</a></li>
    <?php }
    ?>
    <li><a href="/task">评测列表</a></li>
    <li><a href="/">返回主页</a></li>
</ul>