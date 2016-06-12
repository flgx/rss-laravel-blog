<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | @yield('title','')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('assets/css/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/chosen/chosen.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/trumbowyg/dist/ui/trumbowyg.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        @include('admin.layout.partials.nav')
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            @yield('title','')
                        </h1>
                    </div>
                </div>
                <!-- /.row --> 
                @include('flash::message')
                @include('admin.layout.partials.errors')   
                @yield('content','')
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('assets/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/morris/morris-data.js')}}"></script>
    <script src="{{asset('assets/js/jfeed.js')}}"></script>
    <script src="{{asset('assets/js/jatom.js')}}"></script>
    <script src="{{asset('assets/js/jfeeditem.js')}}"></script>
    <script src="{{asset('assets/chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('assets/trumbowyg/dist/trumbowyg.js')}}"></script>
    
    @yield('js')

</body>

</html>