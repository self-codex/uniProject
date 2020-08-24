<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous">

   <style>
      .custom-margin {
         margin: 3% auto;
      }

      /* If you add background image it will look like transparent form*/
       body {
         background: url('images/signIn1.jpg') no-repeat center center/cover;
         min-height:100vh;
      }
      .form-group{
         margin-bottom: 5px;
      }
      .box-shadow{
         padding:10px ;
      }
   </style>
   <title>Registration Form</title>
</head>

<body>
   <div class="container-fluid">
      <div class="row justify-content-center ">
         <div class="col-sm-8 col-md-6 col-lg-6 custom-margin">
            <!-- Add bg-primary in form tag if want form background color-->
            <!--text-white if want text color white-->
            <h3 class="text-white fornt-wight-bold text-center">Registration Form</h3>
            <form action="registration.php" method="post" class="text-white" style="padding:10px;">
               <div class="form-group">
                  <i class="fas fa-user"></i>
                  <label for="fname" class="pl-2 font-weight-bold">First Name</label>
                  <input type="text" name="userFName" class="form-control" placeholder="First Name">
               </div>
               <div class="form-group">
                <i class="fas fa-user"></i>
                <label for="lname" class="pl-2 font-weight-bold">Last Name</label>
                <input type="text" name="userLName"  class="form-control" placeholder="Last Name">
             </div>
             <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="Email" class="p-1 font-weight-bold">E-mail</label>
                <input type="email" name="userEmail" class="form-control" placeholder="E-mail">
             </div>
             <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="Password" class="pl-2 font-weight-bold">Password</label>
                <input type="password" name="userPass" class="form-control" placeholder="Mobile Number">
             </div>

            
               <button type="submit" class="btn btn-outline-primary mt-3 btn-block shadow-sm font-weight-bold">Submit</button>
            </form>
         </div>
      </div>
   </div>


   <!-- JQuery Popper Bootstrap -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
</body>

</html>