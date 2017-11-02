<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
<style>
    body {
        background-color: #2c2c3a;
    }
    #footer {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    width: 100%;
    position: absolute;
        top:120%;
        width: 100%;
}
  li {
    list-style-type: none;
    float: left;
    margin: 50px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    
}  
#header{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #2c2c3a;
    width: 100%;
    position: absolute;
    top: 0;
}
    #back{
        color: white;
        font-family: sans-serif;
        font-size: 35px;
        position: absolute;
        top:50%;
        left: 5%;   
        
    }
    #cheers{
         position: absolute;
        top:13%;
        width: 80%;
        left:0;
        right: 0;
        margin: auto;
    
        
    }
 #setting{
        color: white;
        font-family: sans-serif;
        font-size: 35px;
        position: absolute;
        top:46%;
        right: 5%;   
        
    }
    #muneicon1{
        width: 72px;
         position: absolute;
        bottom: 20%;
        left: 10%;
        
    }
    #muneicon2{
        width: 60px;
         position: absolute;
        bottom: 20%;
        left:34%;
        
    }
    #muneicon3{
        width: 63px;
         position: absolute;
        bottom: 20%;
        left: 57%;
        
    }
    #muneicon4{
        width: 87px;
         position: absolute;
        bottom: 20%;
        left: 80%;
        
    }
    #muneicon5{
        width: 60px;
         position: absolute;
        bottom: 20%;
        left: 5%;
        
    }
    #muneicon6{
        width: 60px;
         position: absolute;
        bottom: 20%;
        right: 5%;
        
    }
    .icone{
    display: inline-block;
        width: 20%;
        margin-left: 10%;
        margin-top: 20%;
    }
    #el {
             color:white;
            font-size: 35px;
            position: absolute;
            top: 47%;
            right: 3%;
           
            margin: 40%;
            font-family: sans-serif;
        }
     #email{
            background-color:#2c2c3a;
            width: 80%;
            position: absolute;
            top: 80%;
            right: 0;
            left: 0;
            margin: auto;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid white;
}
     #e_icon{
            width: 60px;
             position: absolute;
            top: 75%;
            left: 13%;
        }
    #uploadpic{
        width:18%;
         position: absolute;
            top: 90%;
            left: 0;
        right: 0;
        margin: auto;
        
    }
    #uploadbut{
        background-color: #cc9519;
            width: 70%;
            height: 100px;
            position: absolute;
            top:110%;
            z-index: -1;
            left: 15%; 
    }
  
    input{
        position: absolute;
        top:80%;
        left: 10%;
        background-color: #2c2c3a;
        width:80%;
        height:80px;
        font-size:20pt;
        background-image:url(/img/edite_icon.png);
        background-repeat: no-repeat;
        background-size: 60px;
        background-position: left;
        text-indent: 15%;
        color: #fff;
        font-size:60px;
        } 
        
    input::placeholder { color: white;
        text-align: center;
          
            font-family: sans-serif;
            font-size: 40px;
        }
    #total{
        font-size: 60px;
        font-family: sans-serif;
        position: absolute;
        top:53%;
        left: 35%;
        text-align: center;
        color: #fff;
       
    }
    #num{
       font-size: 80px;
        font-family: sans-serif;
        position: absolute;
        top:61%;
        left: 48%;
        text-align: center;
        color: #fff;
    }
</style>
</head>
<body>
   
<header id="header">
    <ul>
      <li><a id ="back" href="#home">Back</a></li>
      <li><a href="#news" id = "setting" > Setting</a></li>
    </ul>
</header>
    <div id ="content">
       <img src="/img/cheers.png" id ="cheers">
    <div id="div1">
      <p id="total"><b>Total <br>Punch Day</b></p>
      <p id= "num"><b>{{ $count }}</b></p>
    <div>
    </div>
     
<input type="text" id="feeling" placeholder="what is your feeling">
   <img src="/img/img_upload_button.png" id ="uploadpic"> 
    <button id="uploadbut"><img src="/img/checkmark.png" width="100px"></button>
<footer>    
<ul id="footer">
  <li><a class="active" href="/index"><img src="/img/menuh.png" id ="muneicon1"></a></li>
  <li><a href=""> <img src="/img/diary.png" id ="muneicon2"></a></li>
  <li><a href=""><img src="/img/sticker.png" id ="muneicon3"></a></li>
  <li><a href="/my"><img src="/img/account.png" id ="muneicon4"></a></li>
</ul>
</footer>

</body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="{{ asset('mui-master/examples/hello-mui/js/mui.min.js') }}"></script>
<script src="{{ asset('mui-master/examples/hello-mui/js/mui.picker.min.js') }}"></script>
<script>
  //提交
  $("#uploadbut").click(function(){
    var url = window.location.pathname
    var hobby_code = url.substring(url.lastIndexOf('/')+1, url.length)
    var remark = $("#feeling").val()
    window.location.href = '/cheers/'+hobby_code
    $.get('/api/hobby_log', {hobby_code: hobby_code, remark: remark}, function(data){
      if (data.code == 200) {
        window.location.reload();
      } else {
        alert(data.msg);
      }
    });
  })
</script>
</html>