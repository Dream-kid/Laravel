  <!DOCTYPE html>
  <html>
  <head>
   <title>Ranking Management</title>
   @include('Partials.styles')
  </head>
  <body>
   <div class="wrapper">
  @include('partials.nav')

 
@yield('content');
@include('Partials.footer')
  

  </div>
 @include('Partials.scripts')
  </body>
  </html>