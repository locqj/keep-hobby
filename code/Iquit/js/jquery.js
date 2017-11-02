$(document).ready(function() {
  //这里面的内容就是页面装载完成后需要执行的代码
  var name = $("#name");
  //需要找到button按扭，注册事件
  $("#but1").click(function() {
    //1.获取文本框的内容
    var name = name.val();
    //2.将这个内容发送给服务器端
    if (name == "") {
      alert("用户名不能为空");
    } else {
      $.get("http://localhost:8888/register/iQuit/js/JQuery/UserVerify?name=" + encodeURI(encodeURI(name)),null,function(response){
          //3.接收服务器端返回的数据，填充到div中
          $("#but1").html(response);
        });
    }
  });
  //需要找到文本框，注册事件
  name.keyup(function(){
    //获取当前文本框中的内容
    var value = name.val();
    if (value == "") {
      //让边框变成红色，并且带背景图
      name.addClass("userText");
    } else {
      //去掉边框和背景图
      userNameNode.removeClass("userText");
    }
  });
});