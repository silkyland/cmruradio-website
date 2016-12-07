<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title or 'CMRU Radio 88.5 :: Admin dashboard' }} </title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/bower_components/sb-admin-2/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/assets/bower_components/sb-admin-2/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/bower_components/sb-admin-2/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/bower_components/sb-admin-2/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/bower_components/datatables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css">
    @yield('css')

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">CMRU RADIO 88.5</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li><a href="/" target="_blank"><i class="fa fa-globe"></i> แสดงหน้าแรก </a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Bundit Nuntates <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        @include('admin.sidebar')
    </nav>

    @yield('content')

</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="/assets/bower_components/sb-admin-2/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/assets/bower_components/sb-admin-2/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/assets/bower_components/sb-admin-2/js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/assets/bower_components/sb-admin-2/js/sb-admin-2.js"></script>
<script src="/assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/assets/bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
@yield('script')
<script src="/assets/js/custom.js"></script>
</body>

</html>

