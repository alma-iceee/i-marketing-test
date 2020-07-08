<ul>
    @foreach($items as $menu_item)
        @if($menu_item->children()->exists())
            <li class="drop-down"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
                <ul>
                    @foreach($menu_item->children as $submenu_item)
                        <li><a href="{{ $submenu_item->link() }}">{{ $submenu_item->title }}</a></li>
                    @endforeach
                </ul>
            </li>
        @else
        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
        @endif
    @endforeach
</ul>
