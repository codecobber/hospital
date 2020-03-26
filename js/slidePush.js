
/*
=============================================
  Developed by Code Cobber for your enjoyment
  http://www.codecobber.co.uk
=============================================
*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  $(document).ready(function(){
    $('#nav-icon1').removeClass('open'); //change the icon
  });
}


$(document).ready(function(){
	$('#nav-icon1').click(function(){
    //open the nav
		$(this).toggleClass('open'); //change the icon
    $(this).hasClass('open') ? openNav():closeNav(); //call function
	});
});
