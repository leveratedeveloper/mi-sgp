
<ul class="navbar-nav ms-auto">
    @foreach($items as $menu_item)
    <li class="nav-item">
        <a class="nav-link" href="{{ $menu_item->link() }}">
            <p>{{ $menu_item->title }}</p>
        </a>
    </li>
    @endforeach
</ul>