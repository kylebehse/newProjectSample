<?php include("../includes/tab/head.php"); ?>

<script type="text/javascript">
// <![CDATA[
function sizeChangeCallback() {
FB.Canvas.setSize({ width: 810, height: 1000});
FB.Canvas.scrollTo(0,0);
}

// ]]>
</script>


</head>

<body id="post_like">
     <?php include("../includes/fbAsyncInit.php"); ?>
     <div id="container" class="container_6">
     
          <?php include("../includes/tab/header.php"); ?>
          
          <div id="content" class="grid_6">
               <a href="#" target="_blank" id="link-www">Just a link</a>
               <a href="#" onclick="postToFeed(); return false;" target="_blank" id="link-postToFeed">Post to Feed</a>
          </div><!--  END .grid_6  -->
          
          <?php include("../includes/tab/footer.php"); ?>
          
     </div><!--END #container.container_6-->
</body>
</html>