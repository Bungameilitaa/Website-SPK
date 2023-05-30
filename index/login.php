<!DOCTYPE html>
<html>
    <head>
        <center><title>LOGIN</title></center>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <style type="text/css">
            .login{
             min-height: 250px;
             background-color: lightsteelblue ;
             margin: 20px;
             width: 30%;
            }
           </style>
    </head>
    <body>
        <center>
        <div class="container">
         <div class="row d-flex justify-content-center">
          <div class="col-5">
           <div class="login border border-dark rounded">
            <form action="aksi_login.php" method="POST">
             <table style="margin: 5px; width: 50%" cellpadding="1" border="0">
              <h1 align="center" style="margin: 70px">LOGIN</h1>
              
              <tr>
               <td>Username</td>
               <td>:</td>
               <td>
                <div class="form-group">
                 <input class="form-control" type="text" name="username">
                </div>
               </td>
              </tr>
              
              <tr>
               <td>Password</td>
               <td>:</td>
               <td><input class="form-control" type="password" name="password"></td>
              </tr>
              <tr>
               <td></td>
               <td></td>
               <td>        
                 <input class="btn btn-dimgray" type="submit" name="" value="login" >
               </td>
               
              </tr>
             </table>
            </form>
            <form action="signup.php" method="POST">
            <td>
                 <input class="btn btn-dimgray" type="submit" name="" value="signup" >
               </td>
          </form>
           </div>
          </div>
         </div>
        </div>
        </center>
        </body>
        <script type="text/javascript" src="js/bootstrap.js"></script>
</html> 