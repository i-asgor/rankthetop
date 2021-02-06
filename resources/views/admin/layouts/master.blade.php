<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="{{url('admin_assets/images/favicon_1.ico')}}">
        <title> @yield('title') - Admin Dashboard </title>

        <!-- Base Css Files -->
        <link href="{{url('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{url('admin_assets/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{url('admin_assets/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{url('admin_assets/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{url('admin_assets/css/animate.css')}}" rel="stylesheet" />

        <!-- Plugin Css-->
        <link rel="stylesheet" href="{{url('admin_assets/assets/magnific-popup/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{url('admin_assets/assets/jquery-datatables-editable/datatables.css')}}" />
        <link href="{{url('admin_assets/assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- Waves-effect -->
        <link href="{{url('admin_assets/css/waves-effect.css')}}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{url('admin_assets/assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{url('admin_assets/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('admin_assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{url('admin_assets/js/modernizr.min.js')}}"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
           
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')
            @yield('admin_content')           

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{url('admin_assets/js/jquery.min.js')}}"></script>
        <script src="{{url('admin_assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('admin_assets/js/waves.js')}}"></script>
        <script src="{{url('admin_assets/js/wow.min.js')}}"></script>
        <script src="{{url('admin_assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{url('admin_assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{url('admin_assets/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{url('admin_assets/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{url('admin_assets/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{url('admin_assets/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{url('admin_assets/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{url('admin_assets/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{url('admin_assets/assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{url('admin_assets/assets/sweet-alert/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{url('admin_assets/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{url('admin_assets/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{url('admin_assets/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{url('admin_assets/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{url('admin_assets/js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{url('admin_assets/js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{url('admin_assets/js/jquery.todo.js')}}"></script>

        <script src="{{url('admin_assets/assets/magnific-popup/magnific-popup.js')}}"></script>
        <script src="{{url('admin_assets/assets/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
        <script src="{{url('admin_assets/assets/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{url('admin_assets/assets/jquery-datatables-editable/datatables.editable.init.js')}}"></script>
        <script src="{{url('admin_assets/assets/datatables/jquery.dataTables.min.js')}}"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <script type="text/javascript">
           $(document).ready(function() {
               $('#datatable').dataTable();
           } );
       </script>

       <script>
           $(document).ready(function() {
               $('#example').DataTable( {
                   "scrollX": true
               } );
           } );
       </script>


    
    </body>
</html>