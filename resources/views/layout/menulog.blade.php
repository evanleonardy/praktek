<div class="col-md-6">
    Hi,  {{ Auth::user()->name }}
</div>
<div class="d-flex" aria-labelledby="nav-item">
    <a class="btn btn-outline-danger" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
