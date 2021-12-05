// JavaScript Document

$(document).ready(function() {

//Menu	
	var pTags = $("ul.sub");
	var pTags1 = $("ul.more_sub");
	if ( pTags.parent().is("div") ) {
		pTags.unwrap();
	}
	if ( pTags1.parent().is("div") ) {
		pTags1.unwrap();
	}	
$('.topMenu td ul').removeClass('sub');
$('.topMenu td ul').removeClass('more_sub');
$('.topMenu td ul').removeClass('main_elements');
var ul = $("<div class=''> <div class='menu-button'>Menu</div>");
    $(".topMenu tr").each(function(){
        var li = $("<ul class='flexnav'>");
        $("th, td", this).each(function(){
		var active=$(this).attr('id');
        if($(this).attr('id')){
			var p = $("<li class='active'>").html(this.innerHTML);
		}else
		{
			 var p = $("<li>").html(this.innerHTML);
		}
		li.append(p);
		});
		ul.append(li);
	});
  $(".topMenu").replaceWith(ul); 

$(".flexnav").flexNav({ 'breakpoint' : '800', 'animationSpeed' : 'fast' });
// menu end
//-------------------------------------------Dolphin template customization----------------------------------------------
$(".flexnav li:first-child").addClass('first');
$(".flexnav li:last-child").addClass('last');
//$('.headerright .clear_both').remove();
       $('.sys_bx_wrapper .bx-def-margin-leftright, .result_block').addClass('row-fluid')
	   $('.bottomLinks, .powered_section').addClass('span8');
	    $('.bx_files_unit_short').addClass('span6');
       $('.bottomCpr, .logo-section').addClass('span4');
	    $('.quick_links_elink').each(function(){
	   $(this).parents(':eq(1)').addClass('width100');
		});
		 $('.boxFirstHeader, .siteStatMain, .boxContent').addClass('clearfix');
		 $('.sys_file_search_unit').parent('div').addClass('photoid');
		 

/*============column dispatch==========*/

$('.page_column_single, .main_footer_block').removeAttr('style');
$('.page_column_single').addClass('span12 marginnone');

var pagecount;
pagecount=parseInt($('.page_column').length);
vartotal=0;
if(pagecount==2)
{
$('.page_column').each(function(){
 vartotal=vartotal+parseInt($(this).css("width"),10); 
 $(this).addClass('col2page');
});
var colfirst=parseInt($(".page_column_first").css("width"),10)/vartotal*99;
var collast=parseInt($(".page_column_last").css("width"),10)/vartotal*99;
$(".page_column_first").css('width',colfirst+'%');
$(".page_column_last").css('width',collast+'%');;
$(".page_column_first").addClass('colsecond');
}

else if(pagecount==3)
{
	
	var yes=$('.page_column');
	if(yes)
	{
		//alert('test');
		vartotal=parseInt($('.page_column_first').css("width"),10)+parseInt($('.page_column_last').css("width"),10);
		
		var colfirst=parseInt($(".page_column_first").css("width"),10)/vartotal*99;
        var collast=parseInt($(".page_column_last").css("width"),10)/vartotal*99;
        $(".page_column_first").css('width',colfirst+'%');
        $(".page_column_last").css('width',collast+'%');
		$(".page_column_first, .page_column_last").addClass('col2page');
		$(".page_column_first").addClass('colsecond');
	}
	else
	{
	  
	  vartotal=parseInt($('.page_column_first').css("width"),10)+parseInt($('#page_column_2').css("width"),10)+parseInt($('.page_column_last').css("width"),10);
	  var colfirst=parseInt($(".page_column_first").css("width"),10)/vartotal*99;
	  var colsec=parseInt($("#page_column_2").css("width"),10)/vartotal*99;
      var collast=parseInt($(".page_column_last").css("width"),10)/vartotal*99;
	  $(".page_column_first").css('width',colfirst+'%');
      $("#page_column_2").css('width',colsec+'%');
      $(".page_column_last").css('width',collast+'%');;
	  $("#page_column_2, .page_column_last, .page_column_first").addClass('col3page');
	  $(".page_column_first").addClass('colfirstn');
	}
}
else if(pagecount==4)
{
	$('body').addClass('col3');
	  var yes=$('.page_column').hasClass('page_column_single');
	if(yes)
	{
		
	  vartotal=parseInt($('.page_column_first').css("width"),10)+parseInt($('#page_column_2').css("width"),10)+parseInt($('.page_column_last').css("width"),10);
	  var colfirst=parseInt($(".page_column_first").css("width"),10)/vartotal*98;
	  var colsec=parseInt($("#page_column_2").css("width"),10)/vartotal*98;
      var collast=parseInt($(".page_column_last").css("width"),10)/vartotal*98;
	  $(".page_column_first").css('width',colfirst+'%');
      $("#page_column_2").css('width',colsec+'%');
      $(".page_column_last").css('width',collast+'%');;
	  $("#page_column_2, .page_column_last, .page_column_first").addClass('col3page');
	  $(".page_column_first").addClass('colfirstn');
		
	}
	else
	{
	  vartotal=parseInt($('#page_column_1').css("width"),10)+parseInt($('#page_column_2').css("width"),10)+parseInt($('#page_column_3').css("width"),10)+parseInt($('#page_column_4').css("width"),10);
	  var col1=parseInt($("#page_column_1").css("width"),10)/vartotal*97;
	  var col2=parseInt($("#page_column_2").css("width"),10)/vartotal*97;
	  var col3=parseInt($("#page_column_3").css("width"),10)/vartotal*97;
      var col4=parseInt($("#page_column_4").css("width"),10)/vartotal*97;
	  $("#page_column_1").css('width',col1+'%');
      $("#page_column_2").css('width',col2+'%');
      $("#page_column_3").css('width',col3+'%');
      $("#page_column_4").css('width',col4+'%');
	  $("#page_column_1, #page_column_2,#page_column_3, #page_column_4").addClass('col3page')
	  $("#page_column_1").addClass('colfirstn');

	}
}


 
		 
/*---------------------------------Header Menu-----------------------------------*/
	   
		 	   $('#back-to-top').click(function () {
   $('body,html').animate({
    scrollTop: 0
   }, 800);
   return false;
  });


});
/*===========================slideshow function============================*/
/*  $(window).load(function(){
	  function adjustStyle(width) {
$('.flexnav li a span').removeAttr('style');
var test=0;
var licount=0;
var paddingli=0;
    width = parseInt(width);
    if (width >= 1200) {
$(".flexnav > li").each(function(){
	test+=parseInt($(this).outerWidth());
});
licount=$(".flexnav > li").length
test=(1130-test)/parseInt(licount);
paddingli=test/2; 
if(paddingli<=25)
{
$(".flexnav > li a span").css({"padding-left":paddingli});
$(".flexnav > li a span").css({"padding-right":paddingli});
}
else
{
$(".flexnav > li a span").css({"padding-left":25});
$(".flexnav > li a span").css({"padding-right":25});
}
	}}
	
		   $(function() {
    adjustStyle($(this).width());
    $(window).resize(function() {
        adjustStyle($(this).width());
    });
});
  });*/
  $(window).scroll(function () {
   if ($(this).scrollTop() > 100) {
    $('#back-to-top').fadeIn();
   } else {
    $('#back-to-top').fadeOut();
   }
  });
  
 $(document).ajaxComplete(function(){
$('.sys_file_search_unit').parent('div').addClass('photoid');
});