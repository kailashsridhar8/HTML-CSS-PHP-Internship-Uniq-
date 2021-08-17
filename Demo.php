<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .d{
            height: 70px;
            width:100%;
            background-color: #212e56;
        }
        .d ul li{
           width:200px;
           float: right;
           list-style-type: none;
           padding:20px;

        }
        .d ul li a{
            color:rgb(255, 255, 255);
            text-decoration: none;
            text-align: center;

        }
        html {
  scroll-behavior: smooth;
}
#sticky-footer {
  flex-shrink: none;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  
  width: 80%;
  height: 9%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card2 {
  
  transition: 0.3s;
  width: 80%;
  height: 23%;
}

.card2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}



    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: aquamarine;">

   <div>
        <img src="logo.png" alt="St.joseph's logo" width="1500px" height="200px">
   </div>

   <div class="d">

    <ul>
    <li><a href="http://www.stjosephstechnology.ac.in/web/index.html" >About us</a></li>
    <div class="login" id="loginb">

        <li><a href="#login1" >Login</a></li>

    </div>
    <div class="a" id="registerb">
        <li><a href="#register" >Register</a></li>
     </div>
     <div class="event" id="eventb">
        <li><a href="#event1" >Events</a></li>
     </div>
     <li><a href="#" >Home</a></li>





           </ul>

   </div>
   <br><br>


   <div class="container-fluid">
    <!-- <h1>Hello World!</h1>
    <p>Resize the browser window to see the effect.</p>
    <p>The columns will automatically stack on top of each other when the screen is less than 768px wide.</p> -->
    <div class="row">
      <div class="col-sm-4">

        <img src="pic.jpg" alt="" height="300px" width="450px">
      </div>
      <div class="col-sm-4">
        <h1>Cybertrix 2020</h1>
        <h2>A National Level Technical Symposium</h2>

          <br><br>
       <h5>"The world is an open source, and computer science is the art of accessing it"</h5>
       <br>

       <p> Computers are magnificent tools for the realization of our dreams, but no machine can replace the human spark of spirit, compassion, love, and understanding.Computer science is no more about computers than astronomy is about telescopes</p>
        <br><br><br><br><br>
<div class="event" id="event1">
    <h1>Events</h1>
    <br><br>
    <div class="bc">
        <h2>1.Blind Code</h2>
        <img src="bc.PNG" alt="">


    </div>
    <br><br>
    <div class="quiriosity">
        <h2>2.Quiriosity</h2>
        <img src="curi.PNG" alt="">


    </div>

    <br><br>
    <div class="debug">
        <h2>3.Debug</h2>
        <img src="debug.PNG" alt="">


    </div>

    <br><br>
    <div class="sql">
        <h2>4.Sql</h2>
        <img src="sql.PNG" alt="">


    </div>

    <br><br>





</div>
<div class="card2">
       <div class="a" id="register">
       <h1>Register</h1>
        <div class="container">
                  <form action="register1.php" method="POST" class="was-validated">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <div class="form-group">
                <label for="cname">Collegename:</label>
                <input type="text" class="form-control" id="cname" placeholder="Enter Collegename" name="cname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <div class="form-group">
              <label for="year">Year:</label>
              <select class="form-control" id="year" name="year">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
             </div>
<label for="Events">Events:</label>

             <div class="container">

                  <div class="form-check">
                    <label class="form-check-label" for="check1">
                      <input type="checkbox" class="form-check-input" id="check1" name="tecno[]" value="Blind Code" checked>Blind Code
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label" for="check2">
                      <input type="checkbox" class="form-check-input" id="check2" name="tecno[]" value="Quiriosity">Quiriosity
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" id="check3" name="tecno[]" value="Debug">Debug
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" id="check4" name="tecno[]" value="Sql">Sql
                    </label>
                  </div>


              </div>



              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </form>
          </div>


        </div><br><br>
</div>
        <div class="card">
        <div class="login" id="login1">

            <h1>Login</h1>
            <div class="container">

                <form action="login.php" method="POST">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                  </div>
                  <!-- <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                  </div> -->
                  <input type="submit" name="login" class="btn btn-primary" value="Login">
                </form>
              </div><br><br><br>






            </div>
</div>




      </div>



      <div class="col-sm-4">
        <img src="pic2.jpg" alt="" height="300px" width="450px">

      </div>
    </div>
  </div>

  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
     
    </div>
  </footer>


   <!-- <div class="text">

        <p>Computers are magnificent tools for the realization of our dreams,<br> but no machine can replace the human spark of spirit, compassion, love, and understanding. <br> Computer science is no more about computers than astronomy is about telescopes</p>
   </div> -->
 <!-- <div style="position: absolute;left:300px;top:200px">
    <div><p>User Name</p></div>
    <div><input type="text" name="txtuname" class="form-control" value=""/></div>
</div>  -->

</body>
</html>
