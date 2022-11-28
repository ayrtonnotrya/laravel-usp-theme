@section('menu')

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3 py-0 border-bottom border-top border-gray">
    <a class="navbar-brand font-weight-bold" href="{{ $app_url }}">
        @section('sitename') {{ $title }} @show
    </a>
</nav>

@endsection
