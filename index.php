<?php
/*
Template Name: Name of Template
*/
?>
<!DOCTYPE html>
<html>
<title>Verify a Certificate</title>
<link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="javaquery.js"></script>
    
    <style>
        .heading{
            
            
            margin-top: 4%;
            width: 450px;
            border-style: none;
            box-shadow: 0px 1px 3px 0px #a8a2a2;
            border-radius: 2px;
            background: white;
            padding: 40px;
            font-family: roboto;
            position: relative;
            line-height: 18px;
            min-height: 450px;
            background-color: #fffffe;
        }
        .verify{
            margin-top: 30px;
            font-size: 20px;
            left: 23%;
            position: relative;
        }
        body{
            
            background: #ededed;
        }
        
        input[type=text] {
            margin-top: 10%;
            width: 100%;
  border: none;
  outline: 0;
  border-bottom: 1px solid #dddddd;
            padding: 10px;
   
}
        input:focus{
            border-bottom:2px solid dodgerblue;
            
        }
        button{
            
            color: white;
            background-color: #e05414;
            border: none ;
            border-radius: 2px;
            padding: 9px 15px 9px 15px;
            font-weight: 500;
            font-size: 17px;
            align-content: flex-end;
            box-shadow: 2px 2px 8px gray;
            margin-top: 20px;
            
        }
        
        .submit:focus{
                        animation: ripple 1s;

            border: none;
            border-width: 0px;
            outline: 0px;
        }
        .submit:hover{
            transition-property: background-color;
            background-color: #7a7a7a;
            transition-duration: 1s;
            cursor: pointer;
        }
        .desc{
            font-size: 12px;
            color: gray;
            opacity: .9;
            font-weight: 300;
            letter-spacing: 0.3px;
        }
        .hide{
        display: none;
        }
        .logo{
            font-size: 32px;
            
            color: #e05414
        }
        .label{
            opacity: .8;
            font-size: 14px;
        }
        .details{
            background-color: #e05414;
            padding: 15px 10px 15px 10px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        .verifyheader{
            display: none;
            margin-top: 10%;
            box-shadow: 0px 2px 5px 0px gray;
            background-color: white;
            width: 50%;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            
            
        }
        .customhead{
            box-shadow: 0px .1px 7px 0px  gray;
            padding: 10px 30px;
            display: none;
        }
    </style>
<body >
    <div class="container-fluid display-4 bg-white customhead">
        Lexartic
    
    </div>
<div class="d-flex justify-content-center container ">
   <div id="heading" class="heading " style="background-color:">
       <div>
    <span class="logo">Lexartic</span>
    <br>
       <span class="label" >Digital Unlock</span>
           </div>
       <div class="d-flex flex-column">
       <img name="image"  class="p-2 img  mx-auto" src="Secure%20data-pana.png" height="250px" width="250px" >
       <div class="verify p-2">Verify a Certificate</div>
           </div>
    
    <input type="text" placeholder="Enter your certificate ID Here" class="inputText">
       
       <br>
       <span class="desc">The certificate id can be found bottom of each certificate</span><br>
       
       <div class="d-flex flex-row-reverse"><button class="submit">Verify</button></div>
    </div>
   
    </div>
     <div class="verifyheader mx-auto">
    <div class="details d-flex flex-row text-white">
        <img src="certification-complete.svg" height="60px" width="60px" class="p-2"><div class="p-2" style="font-size:15px;">Valid Certificate<br>
        Certificate ID: <span id="cid">101</span></div>
    </div>
        <div style="font-size:18px;font-weight: 400;padding:40px 30px; ;background-color:white;font-weight;border-bottom-right-radius:4px;" >
        <span id="stname"></span> Successfull completed the fundamentals of digital Marketing certification.
        </div>
        </div>
    
</body>
  
    
    <script>
    $(".submit").click(function(){
        var id=$(".inputText").val();
        
       $.ajax({
            url: 'check.php', //This is the current doc
            type: "POST",
            data: ({id: id}),
            success: function(response){
                if(response!=404)
                {
                $(".inputText").css({"border-bottom-color":"lime","color":"lime"});
                    $("#heading").css({"display":"none"});
                    $(".verifyheader").css({"display":"block"});
                    $("#cid").text(id);
                    $("#stname").text(response);
                    $(".customhead").css({"display":"block"});
                    
                    
                }
                else{
                    $(".inputText").css({"border-bottom-color":"red","color":"red"});
                }
                
                
            }
           
            })
    })
    </script>
</html>