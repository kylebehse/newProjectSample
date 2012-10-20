// JavaScript Document
$(document).ready(function() {
	//
	//$('#container').hide();
	//
	$('#nav a').on('click', ajaxNav);
});

$(window).ready(function() {
	//
	//$('#container').fadeIn(1000);
	//
});
function ajaxNav(event) {
     event.preventDefault();
     var theURI = $(this).attr('href');
     console.log(theURI);
     var theURL = "/clients/CLIENT_NAME/fb_app-APP_NAME/canvas/tab/pages/"+theURI+".php";
     var pageContentDataString = '';
     getPageContent(theURL, pageContentDataString)
}
function getPageContent(theURL, pageContentDataString){
	//
	$.ajax({  
	  type: "POST",  
	  url: theURL,  
	  data: pageContentDataString,
	  dataType: "html",  
	  success: onGetPageContentSuccess,
	  error: onGetPageContentError
	});
// 
}

function onGetPageContentSuccess(data, textStatus, jqXHR){
     console.log(data, textStatus, jqXHR);
     $('#content').html(data);
}
function onGetPageContentError(jqXHR, textStatus, errorThrown){
     console.log(jqXHR, textStatus, errorThrown);
}