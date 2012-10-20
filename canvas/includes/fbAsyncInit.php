 <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId  : 'APP_ID_GOES_HERE',
      status : true, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml  : true,  // parse XFBML
      oauth : true //enables OAuth 2.0
    });
    sizeChangeCallback();
  };

  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
  //
     function postToFeed() {
     
             // calling the API ...
             var obj = {
               method: 'feed',
               link: 'https://www.facebook.com/pages/RGenta-Test-Page-For-Apps/242864895736977?sk=app_289583____THIS_IS_THE_LINK_TO_THE_FACEBOOK_TAB_PAGE_ONCE_THE_TAB_APP_HAS_BEEN_ADDED',
               picture: 'http://rgenta.com/clients/NAME_OF_CLIENT/fb_app-NAME_OF_APP/canvas/images/logo-200.png',
               name: 'Facebook Dialogs',
               caption: 'App caption',
               description: 'This is the postToFeed description.'
             };
     
             function callback(response) {
               //document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
             }
     
             FB.ui(obj, callback);
     }
     function addToPage() {

        // calling the API ...
        var obj = {
          method: 'pagetab',
          redirect_uri: 'https://apps.facebook.com/NAME_OF_APP/',
        };

        FB.ui(obj);
      }
</script>