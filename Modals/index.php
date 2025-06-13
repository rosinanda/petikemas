<html>
<head>
<script src="jquery-1.10.2.min.js"></script>
<style>
body
{
	margin:0;
}
.modal
{
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	display:none;
}
.modal_close
{
	width:100%;
	height:100%;
	background:rgba(0,0,0,.8);
	position:fixed;
	top:0;
}
.close
{
	cursor:pointer;
}
.modal_main
{
	width:50%;
	height:400px;
	background:#fff;
	z-index:4;
	position:fixed;
	top:16%;
	border-radius:4px;
	left:24%;
	display:none;
 -webkit-animation-duration: .5s;
    -webkit-animation-delay: .0s;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -o-animation-fill-mode: both;
	    -webkit-backface-visibility: visible!important;
    -webkit-animation-name: fadeInRight;
}
@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translateX(20px)}100%{opacity:1;-webkit-transform:translateX(0)}}

button
{
padding:20px;
border-radius:5px;
background:#3399cc;
border:none;
font-size:20px;
color:#fff;
margin:8%;
}
</style>
<script>
$(document).ready(function(){
  $(".call_modal").click(function(){
	$(".modal").fadeIn();
	$(".modal_main").show();
	  });
});
$(document).ready(function(){
  $(".close").click(function(){
	$(".modal").fadeOut();
	$(".modal_main").fadeOut();
	  });
});
</script>
</head>
<body>
<button class="call_modal" style="cursor:pointer;">Show Modal</button>
<div class="modal">
<div class="modal_close close"></div>
<div class="modal_main">
<img src="i783wQYjrKQ.png" class="close" style="margin-top:13px;left:96%;position:fixed;">
</div>
</div>
</body>
</html>