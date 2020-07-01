
<!DOCTYPE html>
<html>
<title>Verify a Certificate</title>
<link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="javaquery.js"></script>
    
    <style>
        .heading{
            height: 500px;
            
            margin-top: 4%;
            width: 450px;
            border-style: none;
            box-shadow: 0px 1px 3px 0px #a8a2a2;
            border-radius: 2px;
            background: white;
            padding: 40px;
            font-family: roboto;
            position: relative;
            
        }
        .verify{
            margin-top: 30px;
            font-size: 25px;
        }
        body{
            background: #ededed;
        }
        
        input[type=text] {
            margin-top: 20%;
            width: 100%;
  border: none;
  outline: 0;
  border-bottom: 1px solid #dddddd;
   
}
        input:focus{
            border-bottom:2px solid dodgerblue;
            
        }
        input[type=submit]{
            
            color: white;
            background-color: dodgerblue;
            border: none ;
            border-radius: 2px;
            padding: 5px;
            font-weight: 500;
            font-size: 17px;
            align-content: flex-end;
            box-shadow: 2px 2px 8px gray;

        }
        
        .submit:focus{
                        animation: ripple 1s;

            border: none;
            border-width: 0px;
            outline: 0px;
        }
        .submit:hover{
            transition-property: background-color;
            background-color: #1249ff;
            transition-duration: 1s;
        }
        .desc{
            font-size: 12px;
            color: gray;
            opacity: .7;
            font-weight: 300;
            letter-spacing: 0.3px;
        }
        .details{
            display: none;
        }
    </style>
<body >
    
<div class="d-flex justify-content-center">
    <div class="heading"><span style="font-size: 20px;">Lexartic</span> <span style="color:darkgray;">Digital Unlock</span>
        <div class="verify">Verify a certificate</div>
        <input class="inputText" type="text" placeholder="Enter Certificate ID " id="certificateId"><br><br>
        <p class="desc">The Certificate ID can be found at the bottom of each certificate.</p>
                <span class="details"></span>

        <br><br><br>
    <div class="d-flex flex-row-reverse">    <input class="p-2 align-middle submit" type="submit" name="Validate" value="Validate">
</div>
        
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
                $(".details").text(response).css({"display":"inline-block"});
                $(".inputText").css({"border-bottom-color":"lime","color":"lime"});
                }
                else{
                    $(".inputText").css({"border-bottom-color":"red","color":"red"});
                }
                
                
            }
           
            })
    })
    </script>
</html>