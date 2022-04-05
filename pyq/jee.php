<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>JEE PYQ</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li  class="nav-item">
              <a  id ="mains" class="nav-link active" aria-current="page" href = "#">Mains</a>
            </li>
            <li class="nav-item">
              <a id = "adv" class="nav-link" href="#">Advanced</a>
            </li>
            
        </div>
      </div>
    </nav>
    
    <h1>JEE Past Year Question Papers</h1>
    <div id  = "messages">
     
    <div id = "mains1"> JEE Mains
      
      <div class = "row" style = "padding-top:30px;">
      <br>  
      <div class="col card" >
        
        <div class="card-body">
          <h5 class="card-title">2021 Session 1</h5>
          <a href="JEE/mains_2021_session_1.pdf" class="btn btn-primary">View question paper</a>
        
        </div>
      </div>
      

      <div class="card col" >
        
        <div class="card-body">
          <h5 class="card-title">2021 Session 2</h5>
          <a href="#" class="btn btn-primary">View question paper</a>
        </div>
      </div>
      <br>

      <div class="card col" >
        
        <div class="card-body">
          <h5 class="card-title">2021 Session 3</h5>
          <a href="#" class="btn btn-primary">View question paper</a>
        </div>
        <br>
        
      </div>
      <div class="card col" >
        
        <div class="card-body">
          <h5 class="card-title">2021 Session 3</h5>
          <a href="#" class="btn btn-primary">View question paper</a>
        </div>
        <br>
      

      </div>
    </div>

    <div id = "adv1"> ADVANCED

    </div>

    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
  var mains = document.getElementById('mains');
  var adv = document.getElementById('adv');

  var myMains = document.getElementById('mains1');
  var myAdv = document.getElementById('adv1');

 // myFeatures.style.display = 'none';
  myAdv.style.display = 'none';
   
  
  function onButtonClickHome() {
      myMains.style.display = 'block';
      myAdv.style.display = 'none';     
    }
    mains.addEventListener("click", onButtonClickHome);
  
  function onButtonClickFeatures() {
      myMains.style.display = 'none';
      myAdv.style.display = 'block';      
    }
    adv.addEventListener("click", onButtonClickFeatures);

  
    </script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
