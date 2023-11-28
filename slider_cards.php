<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/slider.css">
   <link rel="stylesheet" href="css/index.css">
</head>
<body>
   <div id="slider">
      <input type="radio" name="slider" id="slide1" checked>
      <input type="radio" name="slider" id="slide2">
      <input type="radio" name="slider" id="slide3">
      <div id="slides">
         <div id="overflow">
            <div class="inner">
               <a href="agendar_cita.php">
                  <div class="slide slide_1">
                     <div class="slide-content">
                        <div class="card" id="c1"></div>
               </a>
                  </div>
               </div>
               <div class="slide slide_2">
                  <div class="slide-content">
                     <div class="card" id="c2"></div>
                  </div>
               </div>
               <div class="slide slide_3">
                  <div class="slide-content">
                     <div class="card" id="c3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="controls">
         <label for="slide1"></label>
         <label for="slide2"></label>
         <label for="slide3"></label>
      </div>
      <div id="bullets">
         <label for="slide1"></label>
         <label for="slide2"></label>
         <label for="slide3"></label>
      </div>
   </div>

</body>
</html>
