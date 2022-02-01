<nav class="nw-header-nav">
    <ul class="nw-header-nav-list">
        @foreach($categories as $id => $category)
            <li class="nw-header-nav-list__item">
                <a href="{{ route('news::category', $id) }}" class="nw-header-nav-list__link">{{ $category }}</a>
            </li>
        @endforeach
            <li class="nw-header-nav-list__item">
                <a href="{{ route('category::index') }}" class="nw-header-nav-list__link">Все категории</a>
            </li>
            <li class="nw-header-nav-list__item">
                <a href="{{ route('news::index') }}" class="nw-header-nav-list__link">Все новости</a>
            </li>
    </ul>
</nav>
