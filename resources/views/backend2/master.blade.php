@include('layout/backend2/partials/head')

<div class="container body">
    <div class="main_container">
        @include('layout/backend2/partials/side-nav')
        @include('layout/backend2/partials/top-nav')

        @yield('content')

        @include('layout/backend2/partials/footer')
    </div>
</div>

@include('layout/backend2/partials/foot')