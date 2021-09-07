<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('home') }}" class="sidebar-brand">
            Laravel<span>8</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Basic</li>
            <li class="nav-item {{ ((request()->is('samples'))||(request()->is('samples/*'))) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('samples.index') }}">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Sample</span>
                </a>
            </li>
        </ul>
    </div>
</nav>



