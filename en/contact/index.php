<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Company - Contact</title>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/"."head.php"); ?>

<style>

</style>
</head>

<body id="about">
<div id="container">
    <?php	include($_SERVER['DOCUMENT_ROOT']."/includes/"."header.php"); ?>
    <div id="content-wrapper" class="">
    <div id="content" class="container_12">
    <div id="content-container" class="grid_12">
      
    
      <div id="column_1" class="grid_6">
      <h2>Contact</h2>
        <div id="contact_form" class="">
          <form id=contact_form action="/scripts/contact_parse.php" method="post">
            <fieldset>
              <legend>Send Us an Email</legend>
              <ol>
                <li>
                  <label for=name>Name</label>
                  <input id=name name=userName type=text placeholder="First and last name" required autofocus>
                </li>
                <li>
                  <label for=email>Email</label>
                  <input id=email name=userEmail type=email placeholder="example@domain.com" required>
                </li>
                <li>
                  <label for=phone>Phone</label>
                  <input id=phone name=userPhone type=tel placeholder="Eg. +1-475-527-0000" required>
                </li>
                <li>
                  <label for=address>Message</label>
                  <textarea id=address name=userMsg rows=7 required></textarea>
                </li>
              </ol>
            </fieldset>
            <fieldset>
              <button type=submit>Submit!</button>
            </fieldset>
          </form>
        </div><!--END CONTACT_FORM-->
      </div><!--END_COLUMN_1-->
	 
	 
	 
      <div id="column_2" class="grid_6">
        <div id="company_info">
          <p>Company Name<br />
            1234 Address Street City Provience, PoS tAl<br />
            ph: 555.555.5555</p>
        </div><!--END COMPANY_INFO-->
        <div id="map_container">
          <div id="map_canvas"></div>
        </div><!--END MAP_CONTAINER-->
      </div><!--END_COLUMN_2-->
	 
      <div class="clear"></div>
    
    
    
    </div><!-- END #CONTENT-CONTAINER -->
    <div class="clear"></div>
    </div>
    <!--END CONTENT-->
    <div class="clear"></div>
    </div>
    <!--END CONTENT-WRAPPER-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/"."footer.php"); ?>
</div><!--END CONTAINER-->
</body>
</html>