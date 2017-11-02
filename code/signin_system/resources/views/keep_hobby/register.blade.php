<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('mui-master/examples/hello-mui/css/mui.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('mui-master/examples/hello-mui/css/app.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/index_phone.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('mui-master/examples/hello-mui/css/mui.picker.min.css') }}" />
    <style>
        body {
            background-color: #2c2c3a;
            color: #fff;
        }
        .blade_head{

            width: 80%;
            position: absolute;
            left: 0;
            right: 0;
            top:30%;
            margin: auto;
            color: #fff;
            font-size: 50px;
            text-align: center;

        }
        #portrait{
            width: 400px;
            position: absolute;
            left: 0;
            right: 0;
            top:5%;
            margin: auto;
        }
        #email{
            background-color:#2c2c3a;
            width: 80%;
            position: absolute;
            top: 65%;
            right: 0;
            left: 0;
            margin: auto;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid white;
        }
        #name{
            background-color:#2c2c3a;
            width: 80%;
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            margin: auto;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid white;
        }
        #password{
            background-color:#2c2c3a;
            width: 80%;
            position: absolute;
            box-sizing: border-box;
            top: 80%;
            right: 0;
            left: 0;
            margin: auto;
            border: none;
            border-bottom: 2px solid white;
        }
        #surepassword{
            background-color:#2c2c3a;
            width: 80%;
            position: absolute;
            box-sizing: border-box;
            top: 95%;
            right: 0;
            left: 0;
            margin: auto;
            border: none;
            border-bottom: 2px solid white;
        }
        #e_icon{
            width: 60px;
             position: absolute;
            top: 45%;
            left: 13%;
        }
         #e_icon2{
            width: 60px;
             position: absolute;
            top: 60%;
            left: 13%;
        }
        #el {
             color:white;
            font-size: 35px;
            position: absolute;
            top: 17%;
            right: 3%;
           
            margin: 40%;
            font-family: sans-serif;
        }
        #pl {
              color:white;
            font-size: 35px;
            position: absolute;
            top: 17%;
            right: -20%;
        
            margin: 60%;
            font-family: sans-serif;
        }
        .checkbox {
	       font-weight: normal;
            color: white;
            font-size: 35px;
            position: absolute;
            top: 72%;
            left: 39%;
	}
        #tosub{
            background-color: #cc9519;
            width: 70%;
            height: 80px;
            position: absolute;
            top:105%;
            z-index: -1;
            left: 15%;
        }
        #sub{
            width: 60px;
            position: absolute;
            top:15%;
            left:0;
            right: 0;
            margin: auto;
        }
        #socialmedia{
            width: 70%;
              position: absolute;
            top:98%;
            left:0;
            right: 0;
            margin: auto;
        }
        #text{
            color:lightgrey;
            font-family: sans-serif;
            font-size: 25px;
            position: absolute;
            top:90%;
            left: 40%;
            margin: auto;
        }
        #line1{width: 30%;
            border-bottom-color: #cc9519;
            position: absolute;
            top:91%;
            left:2%;    
            
        }
        #line2{width: 30%;
            border-bottom-color: #cc9519;
            position: absolute;
            top:91%;
            right:2%;    
            
        }
        #text1{
             color: white;
            font-family: sans-serif;
            font-size: 25px;
            position: absolute;
            right: 3%;
        }
        input{
            
            width:50px;
            height:80px;
            font-size:20pt;
            background-image:url(/img/edite_icon.png);
            background-repeat: no-repeat;
            background-size: 60px;
            background-position: left;
            font-size: 30px;
            text-indent: 10%;
          
        } 
        
        input::placeholder { 
        color: white;
        text-align: center;
            font-family: sans-serif;
            font-size: 40px;
        }
    </style>
    </head>
    <body>
        
        <image id="portrait" src ="/img/pro.png"></image>
      <label class="blade_head">Register</label>
 
    <input type="text" id="name" placeholder="Name" name="name">
    <input type="text" id="email" placeholder="Email" name="email">
    <input type="password" id="password" placeholder="PassWord" name="password">
    <input type="password" id="surepassword" placeholder="PassWord" name="surepassword">

    <button id= "tosub"><img src= "/img/checkmark.png" id="sub"></button>        
    </body>
    </body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="{{ asset('mui-master/examples/hello-mui/js/mui.min.js') }}"></script>
<script src="{{ asset('mui-master/examples/hello-mui/js/mui.picker.min.js') }}"></script>
<script>
	//提交
	$("#tosub").click(function(){
		var email = $("#email").val()
		var password = $("#password").val()
        var name = $("#name").val()
        var surepassword = $("#surepassword").val()
        if (!name) {
            alert("Name not null");
        } else if (!email) {
            alert("Email not null");
        } else if (surepassword != password) {
            alert("PassWord matching fail !");
        } else {
            $.post('/api/register', {email: email, name: name, password: password}, function(data){
            if (data.code == 200) {
                window.location.href="/tologin"
            } else {
                alert(data.msg);
            }
        })
        }
	})
</script>
</html>
