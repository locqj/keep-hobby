<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Action</title>
<style>
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
	    background-color: #fff;
	    width: 100%;
	    position: absolute;
	    top: 0;
	}
    #back{
        color: #000;
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
        color: #000;
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
    #total{
        font-size: 60px;
        font-family: sans-serif;
        position: absolute;
        top:8%;
        left: 35%;
        text-align: center;
       
    }
    #num{
        font-size: 80px;
        font-family: sans-serif;
        position: absolute;
        top:20%;
        left: 48%;
        text-align: center;  
    }
    .date_title{
    	position: absolute;
		font-size: 45px;
		font-weight: bold;
        top:30%;
        left: 6%;
        display: inline;
        width: 100%;
    }
    #circle1{ 
        position: absolute;

        top:40%;
        left: 6%;
        display: inline;
        width: 8%;
    }
    #circle2{ 
        position: absolute;
        top:40%;
        left: 20%;
        display: inline;
        width: 8%;
    }
     #circle3{ 
        position: absolute;
        top:40%;
        left: 34%;
        display: inline;
        width: 8%;
    }
     #circle4{ 
        position: absolute;
        top:40%;
        left: 48%;
        display: inline;
        width: 8%;
    }
     #circle5{ 
        position: absolute;
        top:40%;
        left: 62%;
        display: inline;
        width: 8%;
    }
     #circle6{ 
        position: absolute;
        top:40%;
        left: 76%;
        display: inline;
        width: 8%;
    }
    #circle7{ 
        position: absolute;
        top:40%;
        left: 88%;
        display: inline;
        width: 8%;
    }

    .circletext1{ 
        position: absolute;
        font-size: 35px;
        font-weight: bold;
        top:41%;
        left: 7%;
        display: inline;
        width: 8%;
        
    }
    .circletext2{ 
        position: absolute;
        top:41%;
        left: 21%;
        display: inline;
        width: 8%;
        font-size: 35px;
        font-weight: bold;
    }
    .circletext3{ 
        position: absolute;
        top:41%;
        left: 35%;
        display: inline;
        width: 8%;
        font-size: 35px;
        font-weight: bold;
    }
    .circletext4{ 
        position: absolute;
        top:41%;
        left: 49%;
        display: inline;
        width: 8%;
        font-size: 35px;
        font-weight: bold;
    }
    .circletext5{ 
        position: absolute;
        top:41%;
        left: 63%;
        display: inline;
        width: 8%;
        font-size: 35px;
        font-weight: bold;
    }
    .circletext6{ 
        position: absolute;
        top:41%;
        left: 77%;
        display: inline;
        width: 8%;
        font-size: 35px;
        font-weight: bold;
    }
    .circletext7{ 
        position: absolute;
        top:41%;
        left: 89%;
        display: inline;
        width: 8%;
        font-size: 35px;
        font-weight: bold;
    }
    #img2{
        position: absolute;
        top:50%;
        height: 660px;
    }
    #tosub{
        background-color: #77776f;
        width: 80%;
        height: 120px;
        position: absolute;
        top:80%;
        z-index: 1;
        left: 12%;
    }
</style>
</head>
<body>
   <header id="header">
    <ul>
      <li><a id ="back" href="#home">Back</a></li>
      <li><a href="#news" id = "setting" > Alarm</a></li>
    </ul>
</header>
   <div id="div1">
    <p id="total"><b>{{ $hobby->name }}<br> Total <br>Punch Day</b>
       <p>
           <p id= "num"><b>{{ $count }}</b></p>
     <div>
    <p class="date_title">Last seven days</p> 
     	@foreach($data as $list)
     		<img src = "/img/bcircle.png" id="circle{{$loop->index + 1}}">
 			<span class="circletext{{ $loop->index + 1 }}">{{ $list->month }}/{{ $list->month }}</span>
     	@endforeach
     </div>
    </div>
<img id= "img2" src="/img/alter1.png" width="100%">
<button id= "tosub"><img src= "/img/checkmark.png" id="sub"></button>

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
	$("#tosub").click(function(){
	    var url = window.location.pathname
	    var hobby_code = url.substring(url.lastIndexOf('/')+1, url.length)
		window.location.href = '/cheers/'+hobby_code
	})
</script>
</body>
</html>