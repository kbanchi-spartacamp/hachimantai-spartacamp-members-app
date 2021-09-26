@section('header')
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a href="/top" class="h5 my-0 me-md-auto fw-normal navbar-brand">八幡平スパルタキャンプWeb</a>
        <nav class="my-2 my-md-0 me-md-3">
            <span class="p-2 text-dark"></span>
        </nav>
        <div>
            <a class="btn btn-outline-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </header>
@endsection
