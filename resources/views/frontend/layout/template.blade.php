
<!DOCTYPE html>
<html lang="en">

    <head>
    	<!-- header -->
    @include('frontend.includes.header')

    <!-- css -->
    @include('frontend.includes.css')

   
    </head>

    <body data-spy="scroll" data-target=".navbar-default" data-offset="100">
        <!--Page Preloader -->
        <div id="loading-page">
            <div id="loading-center-page">
                <div id="loading-center-absolute">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
        <!--Page Preloader -->

        <!-- Content Page -->
        <div class="warpper clearfix">
            <div class="warpper-inner">

                @include('frontend.includes.navbar')	
                

                @yield('body')


                @include('frontend.includes.footer')

            </div>
        </div>
     
                @include('frontend.includes.scripts')
                
    </body>
</html>