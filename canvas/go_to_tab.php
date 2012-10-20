<!DOCTYPE html>
<html>
	<head>
		<title>Go to page tab</title>
		
          <link href="./css/reset.css" rel="stylesheet" type="text/css">
          <link href="./css/text.css" rel="stylesheet" type="text/css">
          <link href="./css/810.css" rel="stylesheet" type="text/css">
          <link href="./css/styles.css" rel="stylesheet" type="text/css">          
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
          <script type="text/javascript">
          // <![CDATA[
          function sizeChangeCallback() {
          FB.Canvas.setSize({ width: 810, height: 1000});
          FB.Canvas.scrollTo(0,0);
          }
          $(document).ready(function()
          {
               //
          });
          $(window).load(function()
          {
          	//
          })
          // ]]>
          </script>
	</head>
	
	<body id="add_to_tab">
         <?php include("./includes/fbAsyncInit.php"); ?>
		<div id="container" class="container_6">
		<div id="content" class="grid_6">
		   <!-- INCASE SOMEONE USES THE SEARCH BAR IN FACEBOOK TO FIND THE PAGE TAB. THIS WILL REDIRECT THEM SO THEY HAVE TO 'LIKE' THE PAGE FIRST -->
		   <a href="https://www.facebook.com/pages/RGenta-Test-Page-For-Apps/242864895736977?sk=app_289583____THIS_IS_THE_LINK_TO_THE_FACEBOOK_TAB_PAGE_ONCE_THE_TAB_APP_HAS_BEEN_ADDED" target="_top">Click here to go to app.</a>
              <a href="#" onclick="addToPage(); return false;" target="_blank" id="link-addToPage">Add to Page Tab</a>
		</div><!--  END #content.grid_6  -->
		</div><!--  END #container.container_6  -->
	</body>
</html>