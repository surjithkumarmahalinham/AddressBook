<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title','Addressbook')</title>
    <meta name="keywords" content="@yield('meta_keywords','Addressbook')">
    <meta name="description" content="@yield('meta_desc','Addressbook')">
        @include('layouts.head')
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
  <style type="text/css">
     thead{
        background: #dbdcdc;
    text-transform: uppercase;
  }

  .card-body
  {
    overflow-x: unset!important;
  }

  </style>
          <!-- Begin page -->
          <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
      @yield('content')
                </div> <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
          @include('deletemodel')
    @include('layouts.footer-script')

          @yield('js_after')
    </body>
</html>
