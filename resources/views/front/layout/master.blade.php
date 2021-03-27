<!DOCTYPE html>
  <html lang="en">

    <head>
      @include('front.layout.header_meta')
    </head>

      <body>

          <!--====== PRELOADER PART START ======-->
          
          <div class="preloader">
            <div class="spin">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        
        <!--====== PRELOADER PART START ======-->

          <!-- ##### Header Area Start ##### -->
            @include('front.layout.header')
          <!-- ##### Hero Area Start ##### -->


          <!--====== SLIDER PART START ======-->
            @include('front.layout.sidebar')
          <!--====== SLIDER PART ENDS ======-->
          
          @yield('content')



        <!--====== FOOTER PART START ======-->
          @include('front.layout.footer')
        <!--====== FOOTER PART ENDS ======-->
        
          <!-- ##### All Javascript Files ##### -->
        @include('front.layout.footer_meta')
      </body>

  </html>
