
$('.topnav a').click(function(){
    $('#sideNavigation').style.width = "250px";
    $("#main").style.marginLeft = "250px";
  });
   
  $('.closebtn').click(function(){
    $('#sideNavigation').style.width = "0";
    $("#main").style.marginLeft = "0";
  });