

<html>
    <head>
        <title>map</title>
    
    <meta charset="utf-8">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://rawgit.com/diazemiliano/googlemaps-scrollprevent/master/dist/googlemaps-scrollprevent.min.js"></script>
    
   



    
   </head>
   
   
   <body>
       <script>(function() {
  $(function() {
    $("#btn-start").click(function() {
      return $("iframe[src*='google.com/maps']").scrollprevent({
        printLog: true
      }).start();
    });
    $("#btn-stop").click(function() {
      return $("iframe[src*='google.com/maps']").scrollprevent().stop();
    });
    return $("#btn-start").trigger("click");
  });

}).call(this);

    </script>
    
     <style>
    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%;
    }
    .embed-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .mapscroll-wrap {
        position: static;
    }
</style>
       <div class="embed-container">
     
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63492.945927837645!2d80.51572818346582!3d5.9520764162443065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae138d151937cd9%3A0x1d711f45897009a3!2sMatara!5e0!3m2!1sen!2slk!4v1472706883539" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           
       </iframe>
       </div>
    <p><a id="btn-start" href="#">"Start Scroll Prevent"</a> <a id="btn-stop" href="#">"Stop Scroll Prevent"</a></p>
    
    
    
   </body>
</html>