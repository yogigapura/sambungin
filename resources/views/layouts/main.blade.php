<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MGB2KFLRB2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-MGB2KFLRB2');
    </script>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    
    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
    <link href="/css/whatsapp.css" rel="stylesheet">
    <title>SAMBUNGIN | {{ $title }} </title>
  </head>
  <body>
    @include('partials.navbar')

    <div class="container mt-2">
        @yield('container')
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <main>

   @include('partials.carousel')  
    <div class="container mt-4">
      @yield('container')
    </div>


    @include('partials.whatsapp')
    <div class="container mt-2">
      @yield('container')
    </div>
      
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-end"><a href="#">Back to top</a></p>
          <p>&copy; 2017–2022 PT Sambung Menyambung Menjadi Satu (SMMS) &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </main>
      
      
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      
    
  </body>
</html>