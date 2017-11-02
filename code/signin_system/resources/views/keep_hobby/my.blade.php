<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
<style>
    
    #footer {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    width: 100%;
    position: absolute;
        bottom: 0px;
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
    background-color: #cc9519;
    width: 100%;
    height: 20%;
    position: absolute;
    top: 0;
    z-index: -1;
}
    #back{
        color: white;
        font-family: sans-serif;
        font-size: 35px;
        position: absolute;
        top:50%;
        left: 5%;   
        
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
    #pro{
        z-index: 1;
        width: 30%;
        position: absolute;
        left: 0;
        right: 0;
        top:10%;
        margin: auto;
    }
    #name {
        font-family: sans-serif;
        font-size: 50px;
        position: absolute;
        color: black;
        top:40%;
        left: 10%;
        
    }
    #namee{
        font-family: sans-serif;
        font-size: 50px;
        position: absolute;
        color:black;
        top:40%;
        right: 10%;
        
    }
    #quit{
        width:100%;
        height: 20%;
        box-shadow: 10px 10px grey;
    }
    #gen{
        color: black;
        font-size: 24px;
         position: absolute;
        top:50%;
        left: 10%;
        
    }
    #gender{
        position: absolute;
         font-size: 30px;
        color:black;
        top:50%;
        right: 10%;
    }
    
    #birth{
        color: black;
        font-size: 24px;
         position: absolute;
        top:60%;
        left: 10%;
        
    }
    #date{
        position: absolute;
         font-size: 24px;
        color:black;
        top:60%;
        right: 10%;
    }
    
    #city{
        color: black;
        font-size: 24px;
         position: absolute;
        top:70%;
        left: 10%;
        
    }
    #cityy{
        position: absolute;
         font-size: 24px;
        color:black;
        top:70%;
        right: 10%;
    }
    #tosub{
        background-color: #cc9519;
        width: 80%;
        height: 110px;
        position: absolute;
        top:80%;
        z-index: 1;
        left: 10%;
        font-size: 80px;
        color: #fff
    }
</style>
</head>
<body>
   
    <header id="header">
<ul>
  <li><a id ="back" href="/index">Back</a></li>
  <li><a href="" id = "setting" > Setting</a></li>
 
</ul>
    </header>
    <div id ="content">
    <img src="/img/pro.png" id = "pro">
        
    </div>
    <div>
        <h3 id = "name"><b>{{ $username }}</b></h3>
          
    
    </div>
    <div id ="quit">
       <p id ="gen">{{ $useremail }}</p> 
     
    </div>
    <div>
        <h3 id = "birth"><b>1994-01-30</b></h3>
        
    </div>
    
    
    <div>
        <p id = "city"><b>xxx</b></p>
    
    </div>
    
    <button id= "tosub">Logout</button>
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
    $("#tosub").click(function(){
        $.get('/logout', function(data){
            if (data.code == 200) {
                window.location.href = '/tologin'
            } else {
                alert('network error !')
            }
        })
    })
</script>
</html>