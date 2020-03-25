<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/adminpanel/css/bootstrap.min.css" rel="stylesheet">
    @if( config('app.locale') == 'fa' )
    <link rel="stylesheet" href="/adminpanel/css/bootstrap.rtl.min.css" >
    @else
    <link rel="stylesheet" href="/adminpanel/css/bootstrap.min.css" >
    @endif
    <title>{{config('app.name')}} | @yield('title')</title>
{{--    <link href="/adminpanel/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="/adminpanel/css/datepicker3.css" rel="stylesheet">
    <link href="/adminpanel/css/bootstrap-table.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/adminpanel/libs/DataTables/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="/adminpanel/libs/bootstrapSelect/dist/css/bootstrap-select.min.css"/>
    <link href="/adminpanel/libs/select2/select2.min.css" rel="stylesheet" />
    <link href="/adminpanel/css/flatpickr.min.css" rel="stylesheet" />
    <link href="/adminpanel/css/flatpickr.rtl.css" rel="stylesheet">

    @if( config('app.locale') == 'fa' )
        <link href="/adminpanel/css/flatpickr.rtl.css" rel="stylesheet">
        @else
        <link href="/adminpanel/css/flatpickr.rtl.css" rel="stylesheet">
    @endif

    <link href="/adminpanel/libs/animate.min.css" rel="stylesheet">
    {{-- <link href="/libs/MDB-Pro/css/mdb.css" rel="stylesheet"> --}}
    <link href="/adminpanel/css/amaj.css" rel="stylesheet">


    <!--Custom Font-->
    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}


    <!--[if lt IE 9]>
    <script src="/adminpanel/js/html5shiv.js"></script>
    <script src="/adminpanel/js/respond.min.js"></script>
    <![endif]-->
