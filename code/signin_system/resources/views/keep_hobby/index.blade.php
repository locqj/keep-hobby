<!DOCTYPE html>
<html>
<head>    
    <link rel="stylesheet" href="{{ asset('mui-master/examples/hello-mui/css/mui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mui-master/examples/hello-mui/css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index_phone.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mui-master/examples/hello-mui/css/mui.picker.min.css') }}" />
    <meta charset="utf-8">
    <title>Index</title>
<style>

body{
  background-color: #cc9519
}
#footer {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    width: 100%;
    position: absolute;
    bottom: 0;
}
    
#header{
  background-color: #cc9519;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
  width: 100%;
  position: absolute;
  top: 0;
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
    .username{
      font-size: 50px;
      margin-left: 25%;
      text-align: center;
    }
</style>
</head>
<body>
   
    <header id="header">
<ul>
  <li><a class="active" href="#home"><img src="/img/editico.png" id ="muneicon5"></a></li>
  <li class="username"><span>Hi! {{ $username }}</span></li>
  <li><a href="#news"> <img src="/img/add.png" id ="muneicon6"></a></li>
 
</ul>
    </header>
    <div id ="content">
    @foreach ($data as $list)
      <a href="/actions/{{ $list->code }}"><img src="/img/icon1.png" class ="icone" id=""></a>
    @endforeach
      
      <!-- <img  src ="/img/icon2.png" class ="icone" id ="icon2">
      <img  src ="/img/icon3.png" class ="icone" id = "icon3"> -->
      <img  src ="/img/icon4.png" class ="icone" id ="add">
      
      
    </div>
    
    
    
<footer>    
<ul id="footer">
  <li><a class="active" href="/index"><img src="/img/menuh.png" id ="muneicon1"></a></li>
  <li><a href=""> <img src="/img/diary.png" id ="muneicon2"></a></li>
  <li><a href=""><img src="/img/sticker.png" id ="muneicon3"></a></li>
  <li><a href="/my"><img src="/img/account.png" id ="muneicon4"></a></li>
</ul>
    </footer>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="{{ asset('mui-master/examples/hello-mui/js/mui.min.js') }}"></script>
<script src="{{ asset('mui-master/examples/hello-mui/js/mui.picker.min.js') }}"></script>
<script>
  //提交
  $("#add").click(function(){
     window.location.href="/addactions"
  })
</script>
</body>
</html>