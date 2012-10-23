<?php

include ('inc/sharePage.php');
require 'facebook.php';
$app_id = "308644145901416";
$app_secret = "5fab5b7a4d38c9afa301594a2664c435";
$facebook = new Facebook(array(
        'appId' => $app_id,
        'secret' => $app_secret,
        'cookie' => true
));


$signed_request = $facebook->getSignedRequest();

$page_id = $signed_request["page"]["id"];
$page_admin = $signed_request["page"]["admin"];
$like_status = $signed_request["page"]["liked"];
$country = $signed_request["user"]["country"];
$locale = $signed_request["user"]["locale"];

$login_url = $facebook->getLoginUrl( array( 'scope' => 'publish_actions') );

?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Nestl&eacute; Purina Careers | Career ConneXion</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <div id="fb-root">
</div>

<script>
  window.fbAsyncInit = function() {
    // This inCanvas line is a fix/hack for IE9 troubles. See
    //    http://bugs.developers.facebook.net/show_bug.cgi?id=16176#c21
    FB._inCanvas = false;
    FB.init({
      appId  : '308644145901416',
      status : false, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml  : true,
      oauth  : true
    });
      FB.Canvas.setAutoGrow();
  };

  (function() {
    var e = document.createElement('script');
    e.src = 'https://connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div id="wrap">

<?php if ($like_status) { ?>  <!-- While developing locally, add a ! before $like_status variable to show "like" content.  Remove ! to turn back on "like to view content" functionality -->

    <header>
      <h1>Nestl&eacute; Purina Careers</h1>
      <h2>Career ConneXion</h2>
      <p><a class="newwindow" href="http://www.nestlepurinacareers.com">Visit us now at nestlepurinacareers.com</a></p>
    </header>
    <div id="main" role="main">
      <h3 id="title">Take the Next Step Toward Your Future with Nestl&eacute; Purina</h3>
      <p>Select your graduation date, major, and click "Connect Me" below to find which available position(s) are the best fit for you!</p>
      <br />
      <div id="gradDate" class="filter">
        <h4>*Graduation Date</h4>
        <select name="">
          <option value="selectDate">Select a Date</option>
          <option value="ad">Already Graduted</option>
          <option value="f2">Fall 2012</option>
          <option value="s3">Spring 2013</option>
          <option value="f3">Fall 2013</option>
          <option value="s4">Spring 2014</option>
          <option value="f4">Fall 2014</option>
          <option value="s5">Spring 2015</option>    
        </select>
      </div><!-- gradDate -->
      <div id="major" class="filter">
        <h4>*Major</h4>
        <select name="">
          <option value="selectMajor">Select a Major</option>
          <option value="accounting">Accounting</option>
          <option value="advertising">Advertising
          <option value="agriculturalEngineering">Agricultural Engineering</option>
          <option value="animalCompanion">Animal Companion</option>
          <option value="animalScience">Animal Science</option>
          <option value="audit">Audit</option>
          <option value="biology">Biology</option>
          <option value="biosystemsEngineering">Biosystems Engineering</option>
          <option value="businessAdministration">Business Administration</option>
          <option value="business">Business</option>
          <option value="chemistry">Chemistry</option>
          <option value="chemicalEngineering">Chemical Engineering</option>
          <option value="communication">Communications</option>
          <option value="electricalEngineering">Electrical Engineering</option>
          <option value="engineering">Engineering</option>
          <option value="engineeringTechnology">Engineering Technology</option>
          <option value="finance">Finance</option>
          <option value="fineArts">Fine Arts</option>
          <option value="foodManufacturing">Food Manufacturing</option>
          <option value="foodProcessing">Food Processing</option>
          <option value="foodScience">Food Science</option>
          <option value="graphicDesign">Graphic Design</option>
          <option value="humanResources">Human Resources</option>
          <option value="industrialEngineering">Industrial Engineering</option>
          <option value="industrialManagement">Industrial Management</option>
          <option value="industrialOrganization">Industrial Organization Psychology</option>
          <option value="isIT">IS/IT</option>
          <option value="journalism">Journalism</option>
          <option value="logistics">Logistics</option>
          <option value="mba">MBA</option>
          <option value="management">Management</option>
          <option value="manufacturing">Manufacturing</option>
          <option value="manufacturingManagement">Manufacturing Management</option>
          <option value="marketing">Marketing</option>
          <option value="materialsManagement">Materials Management</option>
          <option value="materialsScience">Materials Science &amp; Engineering</option>
          <option value="mechanicalEngineering">Mechanical Engineering</option>
          <option value="microbiology">Microbiology</option>
          <option value="operationsManagement">Operations Management</option>
          <option value="other">Other</option>
          <option value="packagingScience">Packaging Science</option>
          <option value="productionManagement">Production Management</option>
          <option value="psychology">Psychology</option>
          <option value="publicRelations">Public Relations</option>
          <option value="sales">Sales</option>
          <option value="supplyChainTransportation">Supply Chain &amp; Transportation</option>
          <option value="visualCommunications">Visual Communications</option>     
        </select>
      </div><!-- major -->
      <p class="connectMe"><a>Connect Me</a></p>
      <div id="results">
        <div class="somePositions">
          <p>Congratulations! Based on your information, the following position(s) may be a good match for you.<br />Click on the positions below to learn more and apply.</p>
        </div>
        <div class="noPositions">
          <h5>We really appreciate your interest in Nestl&eacute; Purina!</h5>
          <p>Unfortunately, we do not have any internships or entry-level positions available at this time based upon your major and graduation date. However, we would encourage you to sign up for <a class="newwindow" href="http://jobs.nestlepurinacareers.com/jobalert/form.alert?ACCT_NAME=nestle&CCC_DEST=purina">email alerts</a> to notify you when new positions become available in your area of interest.</p>
        </div>
<!--        <p class="aResult f3 s4 advertising communication fineArts graphicDesign journalism marketing publicRelations visualCommunications"><a class="newwindow" href="https://www.facebook.com/dialog/feed?
  app_id=123050457758183&
  link=https://developers.facebook.com/docs/reference/dialogs/&
  picture=http://fbrell.com/f8.jpg&
  name=Facebook%20Dialogs&
  caption=Reference%20Documentation&
  description=Using%20Dialogs%20to%20interact%20with%20users.&
  redirect_uri=http://www.example.com/response">Art Director Intern</a></p>
-->
        <div class="positions">
          <!-- <p class="aResult f3 s4 f4 s5 accounting audit businessAdministration finance isIT"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2634066&sn=I&tf=JobDescriptionPurina.html">Audit Intern</a></p> -->
          <!-- <p class="aResult f3 s4 f4 s5 audit isIT"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2636502&sn=I&tf=JobDescriptionPurinaC.html">Audit - IS/IT Intern</a></p> -->
          <!-- <p class="aResult f3 s4 mba"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633288&sn=I&tf=JobDescriptionPurina.html">Marketing Intern</a></p> -->
          <!-- <p class="aResult f3 s4 advertising businessAdministration business communication journalism management marketing other psychology publicRelations sales"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633407&sn=I&tf=JobDescriptionPurina.html">Sales Intern - Customer Development</a></p>  -->
          <p class="aResult f3 s4 business logistics supplyChainTransportation"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633666&sn=I&tf=JobDescriptionPurina.html">Supply Chain Intern</a></p>
          <p class="aResult ad f2 s3 accounting"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633660&sn=I&tf=JobDescriptionPurina.html">Accounting Trainee</a></p>
          <!-- <p class="aResult ad f2 s3 agriculturalEngineering biosystemsEngineering chemicalEngineering electricalEngineering engineering industrialEngineering mechanicalEngineering"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633649&sn=I&tf=JobDescriptionPurina.html">Engineering Trainee</a></p> -->
          <!-- <p class="aResult ad f2 s3 biosystemsEngineering chemicalEngineering engineering mechanicalEngineering"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633851&sn=I&tf=JobDescriptionPurina.html">Engineering Trainee (PTC)</a></p> -->
          <!-- <p class="aResult ad f2 s3 businessAdministration humanResources industrialOrganization psychology"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633664&sn=I&tf=JobDescriptionPurina.html">Human Resources Trainee</a></p> -->
          <!-- <p class="aResult agriculturalEngineering animalCompanion animalScience biology chemicalEngineering electricalEngineering engineering engineeringTechnology foodManufacturing foodProcessing foodScience industrialEngineering industrialManagement manufacturingManagement mechanicalEngineering operationsManagement productionManagement"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633654&sn=I&tf=JobDescriptionPurina.html">Production Trainee</a></p> -->
          <p class="aResult ad f2 s3 agriculturalEngineering animalScience biology biosystemsEngineering chemistry chemicalEngineering foodManufacturing foodProcessing foodScience microbiology"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633657&sn=I&tf=JobDescriptionPurina.html">Quality Assurance Trainee</a></p>
          <p class="aResult ad f2 s3 businessAdministration business industrialEngineering logistics operationsManagement supplyChainTransportation"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2633661&sn=I&tf=JobDescriptionPurina.html">Supply Chain Trainee</a></p>
          <!-- <p class="aResult f3 s4 finance "><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2635949&sn=I&tf=JobDescriptionPurinaC.html">Finance Intern</a></p> -->
          <!-- <p class="aResult f3 s4 f4 s5 accounting"><a class="newwindow" href="http://ad.doubleclick.net/clk;260616126;84919755;r?http://jobs.nestlepurinacareers.com/servlet/av/jd?ai=680&ji=2635955&sn=I&tf=JobDescriptionPurinaC.html">Financial Reporting Intern</a></p> -->
        </div><!-- positions -->
        <p class="connecting">Connecting...</p>
        <p class="positionUpdate">Note that several internships and entry level positions are no longer accepting applications.  Be sure to <span class="fb-like" data-href="https://www.facebook.com/NestlePurinaCareers" data-send="false" data-layout="box_count" data-width="150" data-show-faces="false"></span> our Facebook page to hear about the latest updates, or sign up for our <a class="newwindow" href="http://jobs.nestlepurinacareers.com/jobalert/form.alert?ACCT_NAME=nestle&CCC_DEST=purina">email alerts</a> to be notified of new job postings.</p>
      </div><!-- results -->
      <p id="locations">Many of these positions have multiple locations available across the U.S.</p>
    </div><!-- main -->
    <div class="sharePage">
      <h1>Share</h1>
      <p class="facebook">
        <a onClick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=648,height=375');" href="javascript: void(0)"></a>
      </p><!-- Facebook -->
      <p class="tweet">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://on.fb.me/OnkyiD" data-text="Use the Career ConneXion app on Facebook to see which position(s) may be a good match for you at Nestl&eacute; Purina!" data-count="none">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </p><!-- tweet -->
      <p class="linkedin">
        <script src="https://platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share"></script>
      </p><!-- linkedin -->
      <p class="googlePlus">
        <!-- Place this tag where you want the +1 button to render -->
        <g:plusone annotation="none"></g:plusone>
        <!-- Place this render call where appropriate -->
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
      </p><!-- googlePlus -->
      <!-- <p class="addApp"><a class="newwindow" href="https://www.facebook.com/dialog/pagetab?app_id=308644145901416&next=https://leveragenewagemedia.com/lookingglass/purinacareers/careerconnexion/">Add Career Connexion</a></p> -->
      <div class="callouts">
        <p class="applyHere"><a class="newwindow" href="http://jobs.nestlepurinacareers.com/public/680/purina.htm">Apply Here</a></p>
        <p class="emailAlerts"><a class="newwindow" href="http://jobs.nestlepurinacareers.com/jobalert/form.alert?ACCT_NAME=nestle&CCC_DEST=purina">Email Alerts</a></p>
      </div>
    </div>
    
<?php } else { ?>

    <header>
      <h1>Nestl&eacute; Purina Careers</h1>
      <h2>Career ConneXion</h2>
      <p><a class="newwindow" href="http://www.nestlepurinacareers.com">Visit us now at nestlepurinacareers.com</a></p>
    </header>
    <div class="notLikedContent">
      <div class="fb-like" data-href="https://www.facebook.com/NestlePurinaCareers" data-send="false" data-layout="box_count" data-width="150" data-show-faces="false"></div>
      <p>'LIke' us to find which available position(s) are the best fit for you!<br /><em style="color: #999;">(you may have to refresh the page)</em></p>
    </div>

<?php } ?>

  </div><!-- wrap -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>