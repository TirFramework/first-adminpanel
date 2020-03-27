@include(config('crud.admin-panel').'::layouts.head')

<body class="@if( config('app.locale') == 'fa' ) rtl @endif">
    @include(config('crud.admin-panel').'::layouts.header')
    @include(config('crud.admin-panel').'::layouts.sidebar')
    <div class="layout">
        {{--@include('admin.layouts.breadcrump')--}}
        <h1 class="page-header" mytitle="@yield('page-heading')">
            {{-- <i class="fas fa-dot-circle"></i> --}}
            @yield('page-heading')
        </h1>
        <div class="main">
            {{--Custom System message--}}
            @if ($errors->any())
                <div class="alert bg-danger alert-dismissable fade show" role="alert">
                    <a href="#" class="pull-right"><em class="fas fa-lg fa-times" data-dismiss="alert" aria-label="close"></em></a>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{--Custom Success message--}}
            @if (Session::has('message'))
                <div class="alert bg-success" role="alert">
                    <a href="#" class="pull-right"><em class="fas fa-lg fa-times" data-dismiss="alert" aria-label="close"></em></a>
                    <em class="fas fa-lg fa-exclamation-circle">&nbsp;</em>
                    {{ Session::get('message') }}
                </div>
            @endif

            {{--Custom Error message--}}
            @if (Session::has('error'))
                <div class="alert bg-danger alert-dismissable fade show" role="alert">
                    <a href="#" class="pull-right"><em class="fas fa-lg fa-times" data-dismiss="alert" aria-label="close"></em></a>
                    <em class="fas fa-lg fa-exclamation-circle">&nbsp;</em>
                    {{ Session::get('error') }}
                </div>
            @endif


            @yield('content')
        </div> <!--/.main-->
    </div>

@include(config('crud.admin-panel').'::layouts.footer')

</body>
</html>
