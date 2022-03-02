<nav class="nw-header-nav">
    <ul class="nw-header-nav-list">
        <li class="nw-header-nav-list__item">
            <a href="{{ route('admin.news.index') }}" class="nw-header-nav-list__link">Новости</a>
        </li>
        <li class="nw-header-nav-list__item">
            <a href="{{ route('admin.category.index') }}" class="nw-header-nav-list__link">Категории</a>
        </li>
        @if(Auth::user()->isAdmin())
            <li class="nw-header-nav-list__item">
                <a href="{{ route('admin.profile.index') }}" class="nw-header-nav-list__link">Профили</a>
            </li>
        @endif
    </ul>
</nav>
