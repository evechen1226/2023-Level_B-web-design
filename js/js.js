// JavaScript Document
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});
function lo(x)
{
	location.replace(x)
}
function op(x,y,url)
{
    // fedin 淡入
	$(x).fadeIn()
	
	if(y)
	$(y).fadeIn()
	
	if(y&&url)
    // 在 Y 內載入 url
	$(y).load(url)
}
function cl(x)
{
	// $ 是JQuery縮寫
	// fedout 淡出
	$(x).fadeOut();
}