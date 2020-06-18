<nav class="primary-menu with-arrows">
    <ul class="not-dark menu-container">

    @foreach($items as $menu_item) 
        <li class="menu-item"><a class="menu-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
        @if(count($menu_item->children)>0)
        <ul class="sub-menu-container">
            @foreach($menu_item->children as $menu_sub_item) 
                <li class="menu-item"><a class="menu-link" href="{{ $menu_sub_item->link() }}">{{ $menu_sub_item->title }}</a></li> 
            @endforeach 
        </ul>
        @endif
    </li> 
    @endforeach 
</ul> 
</nav>
