<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Main Style -->
    <link rel="stylesheet" href="css/init.css" type="text/css" />

    <!-- Navbar -->
    <title>Sector443 - Nuke Center</title>
  </head>
  <body style="background-color:black;">
     <nav class="navbar navbar-expand-sm bg-light navbar-light">
     <a class="navbar-brand" href="#">[$ecTor443 - Nuke Center]</a>
     </nav>
     
     <!-- Input console -->
     <div class="row" style="height:">
         <div class="col-xl-4 col-md-4"></div>
         <div class="col-xl-4 col-md-4">
         <form action="launch_attack.php" method="post">
             <label for="ip_input_box"><h3>Enter host url:</h3></label>
             <input type="text" name="host_url" class="form-control" placeholder="Example: http://192.168.1.1 or http://google.com" id="ip_input_box"/>
             <label for="server_count"><h3>Number of servers you want:</h3></label>
             <select class="form-control" name="serv_count" id="server_count">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
             </select>
             
             <div class="row">
                <div class="col-xl-4 col-md-4"></div>
                <div class="col-xl-4 col-md-4">
                <button type="submit" class="btn btn-danger">Launch</button>
                </div>
                <div class="col-xl-4 col-md-4"></div>
             </div>
         </form>
         </div>
         <div class="col-xl-4 col-md-4"></div>
     </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>