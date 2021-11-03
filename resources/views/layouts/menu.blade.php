<li class="nav-item">
    <a href="{{ route('covidAPIs.index') }}"
       class="nav-link {{ Request::is('covidAPIs*') ? 'active' : '' }}">
        <p>Covid A P Is</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


