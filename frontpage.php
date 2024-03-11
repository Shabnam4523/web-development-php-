<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
		<link href="bootstrap/bootstrap/css/bootstrap.min.css" rel=" stylesheet">
		
	
   <style>
        *{
            margin:0px;
        }
     body{
       
        
        border-width: 500px;
        background-image: url('photos/charity.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100% ;
        height: 780px;
       
        }

     .c1{
        font-size:40px;
        font-weight: bold;
        font-family: Monotype Corsiva;
     }
     
     
     .der{
        border: 2px solid; 
       border-color:black;
        background-color:whitesmoke;
        border-radius: 15px;
           
     }
     .c2{
        height:200px;
     }
    #sp{
        color:blue;
    }
    
   </style>
</head>
<?php
include("header.php");?>
<body>
    <div class="container-fluid bor">
       
        <div class="row c2 ">
            <div class="col-12 my-4" ></div>        </div>


        
        <div class="row ">
            
            <div class="col-2"></div>
            <div class="col-3 der ">
                <div class="row my-2  ">
            
                    <div class="col-md c1">log in to your account</div>
                    
                    </div>
                    

                <form action="../php/submit.php" method="post" >
                <div class="row my-2  ">
            
                        <div class="col-md">
                            <input class= "form-control " id="id1" type="text" name="username" placeholder="enter username" onsubmit="return checkdata()"  >
                        </div>
                        
                </div>
                <div class="row my-2">
            
                    <div class="col-md ">
                        <input class= "form-control " id="id2" type="password" name="password" placeholder="enter your password" onsubmit="return data()">
                    </div>
                    
              </div>
              <div class="row my-2 ">
            
                <div class="col-md ">
                    <input class= "form-control " id="id3" type="email" name="email" placeholder="enter your email" onsubmit="return check()" onblur="hit()">
                </div>
                
          </div>
          <div class="row my-2 ">
            <div class="col-4"></div>
            <div class="col-md-8"><button  class="btn btn-primary">submit</button>
                <div class="col-4"></div>
          </div>
        </form>

          <div class="row my-3 ">
            <div class="col-4"></div>
            <div class="col-6 text-dark ">forget password?<br><span id="sp">join now</span>
            </div>
            <div class="col-2"></div>
          </div>
            </div>
            <div class="col-6"></div>
           
       
            
    </div>
    <?php
    include("footer.php");?>
    <script>

      function checkdata(){ 
            var x = document.getElementById("id1").value

            if(x==""){
                document.getElementById("id1").value="please fill this field"
                return false 
            }
                else{
                    return true
                }

            }
            function data(){ 
            var y = document.getElementById("id2").value

            if(y==""){
                document.getElementById("id2").value="please fill this field"
                return false 
            }
                else{
                    return true
                }

            }
           function check(){ 
            var x = document.getElementById("id3").value

            if(z==""){
                document.getElementById("id3").value="please fill this field"
                return false 
            }
                else{
                    return true
                }

            }
        function hit(){
            var email=document.getElementById("id2").value 
            var pattern=/^ [a-zA-Z0-9\-\_\.]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/
            if(pattern.test(email)){
                console.log("valid")
            }
            else{
                console.log("invalid")
            }
        }
    </script>
	
</body>
</html>