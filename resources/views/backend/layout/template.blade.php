
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- header -->
    @include('backend.includes.header')

    <!-- info -->
    @include('backend.includes.info')

    <!-- css -->
    @include('backend.includes.css')
    
  </head>

  <body>

    <!-- manubar -->
    @include('backend.includes.manubar')

    <!-- topbar -->
    @include('backend.includes.topbar')

    <!-- optional -->
    @include('backend.includes.optional')

    

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

      @yield('body')

      <!-- footer -->
      @include('backend.includes.footer')
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- scripts -->
    @include('backend.includes.scripts')
    
  </body>
</html>
