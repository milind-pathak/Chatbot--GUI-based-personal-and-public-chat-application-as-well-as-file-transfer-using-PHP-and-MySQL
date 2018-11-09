function scTop(){
 $(".msgs1").animate({scrollTop:$(".msgs1")[0].scrollHeight});
}
function load_new_stuff(){
 localStorage['lpid']=$(".msgs1 .msg:last").attr("title");
 $(".msgs1").load("msgs2.php",function(){
  if(localStorage['lpid']!=$(".msgs1 .msg:last").attr("title")){
   scTop();
  }
 });
 $(".users").load("users.php");
}
$(document).ready(function(){
 scTop();
 $("#msg_form").on("submit1",function(){
    load_new_stuff();
  });
  return false;
});
setInterval(function(){
 load_new_stuff();
},5000);
