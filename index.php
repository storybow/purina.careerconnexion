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
  <link rel="stylesheet" href="css/fonts.css">

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
      <div class="filters two-filters">
        <div id="gradDate" class="cc-filter">
          <h4>*Graduation Date</h4>
          <select name="">
            <option value="selectDate">Select a Date</option>
            <option value="ad">Already Graduated</option>
            <option value="f3">Fall 2013</option>
            <option value="s4">Spring 2014</option>
            <option value="f4">Fall 2014</option>
            <option value="s5">Spring 2015</option>
            <option value="f5">Fall 2015</option>
            <option value="s6">Spring 2016</option>    
          </select>
        </div>
        <div id="major" class="cc-filter">
          <h4>*Major</h4>
          <select name="">
            <option value="selectMajor">Select a Major</option>
            <option value="accounting">Accounting</option>
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
            <option value="computer-science">Computer Science</option>
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
            <option value="manufacturingManagement">Manufacturing Management</option>
            <option value="marketing">Marketing</option>
            <option value="materialsManagement">Materials Management</option>
            <option value="materialsScience">Materials Science &amp; Engineering</option>
            <option value="mechanicalEngineering">Mechanical Engineering</option>
            <option value="microbiology">Microbiology</option>
            <option value="operationsManagement">Operations Management</option>
            <option value="other">Other</option>
            <option value="productionManagement">Production Management</option>
            <option value="psychology">Psychology</option>
            <option value="publicRelations">Public Relations</option>
            <option value="sales">Sales</option>
            <option value="supplyChainTransportation">Supply Chain &amp; Transportation</option>
            <option value="visualCommunications">Visual Communications</option>     
          </select>
        </div><!-- major -->
      </div><!-- filters -->
      <div class="connect-buttons double-filter">
        <p class="connectMe"><a>Connect Me</a></p>
        <p class="connecting">Connecting...</p>
      </div>
      <div id="results">
        <div class="somePositions">
          <p>Congratulations! Based on your information, the following position(s) may be a good match for you.  Click on the position(s) below to learn more and apply.</p>
        </div>
        <div class="noPositions">
          <h5>We really appreciate your interest in Nestl&eacute; Purina!</h5>
          <p>Unfortunately, we do not have any internships or entry-level positions available at this time based upon your major and graduation date. However, we would encourage you to sign up for <a class="newwindow" href="http://m.nestlejobs.com/talentchannel">email alerts</a> to notify you when new positions become available in your area of interest.</p>
        </div>
        <ul class="positions clearfix">
          <li class="aResult ad f3 s4 accounting"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276476;102116668;m?http://nestlejobs.com/missouri/nestle-purina-petcare-company/jobid4031720-trainee-accounting-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Accounting%20Trainee&utm_campaign=2013_Nestle_Purina">Accounting Trainee</a></li>
          <li class="aResult ad f3 s4 agriculturalEngineering biosystemsEngineering chemicalEngineering electricalEngineering engineering industrialEngineering mechanicalEngineering"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276488;102116668;p?http://nestlejobs.com/missouri/nestle-purina-petcare-company/jobid4031698-trainee-engineering-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Engineering%20Trainee&utm_campaign=2013_Nestle_Purina">Engineering Trainee</a></li>
          <li class="aResult ad f3 s4 biosystemsEngineering chemicalEngineering electricalEngineering engineering foodProcessing mechanicalEngineering"><a class="two-lines newwindow" href="http://ad.doubleclick.net/clk;275276487;102116668;o?http://nestlejobs.com/iowa/nestle-purina-petcare-company/jobid4031717-trainee-engineering-(ptc)-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Engineering%20PTC%20Trainee&utm_campaign=2013_Nestle_Purina">Engineering PTC Development Program</a></li>
          <li class="aResult ad f3 s4 businessAdministration humanResources industrialOrganization psychology management"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276486;102116668;n?http://nestlejobs.com/missouri/nestle-purina-petcare-company/jobid4031703-trainee-human-resources-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Human%20Resources%20Trainee&utm_campaign=2013_Nestle_Purina">Human Resources Trainee</a></li>
          <li class="aResult ad f3 s4 businessAdministration computer-science isIT"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276485;102116668;m?http://nestlejobs.com/nebraska/nestle-purina-petcare-company/jobid4031714-trainee-information-systems-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Is/IT%20Trainee&utm_campaign=2013_Nestle_Purina">IS/IT Trainee</a></li>
          <li class="aResult ad f3 s4 agriculturalEngineering animalCompanion animalScience biosystemsEngineering chemicalEngineering electricalEngineering engineering engineeringTechnology foodManufacturing foodProcessing foodScience industrialEngineering industrialManagement manufacturingManagement mechanicalEngineering operationsManagement productionManagement"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276484;102116668;l?http://nestlejobs.com/missouri/nestle-purina-petcare-company/jobid4031699-trainee-production-jobs?ss=paid&utm_source=Career%20Connexion&utm_medium=Production%20Trainee&utm_campaign=2013_Nestle_Purina">Production Trainee</a></li>
          <li class="aResult ad f3 s4 agriculturalEngineering animalScience biology biosystemsEngineering chemistry chemicalEngineering foodManufacturing foodProcessing foodScience microbiology"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276496;102116668;o?http://nestlejobs.com/davenport/nestle-purina-petcare-company/jobid4031727-trainee-quality-assurance-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Quality%20Assurance%20Trainee&utm_campaign=2013_Nestle_Purina">Quality Assurance Trainee</a></li>
          <li class="aResult ad f3 s4 businessAdministration business industrialEngineering logistics operationsManagement supplyChainTransportation"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276495;102116668;n?http://nestlejobs.com/missouri/nestle-purina-petcare-company/jobid4031704-trainee-supply-chain-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Supply%20Chain%20Trainee&utm_campaign=2013_Nestle_Purina">Supply Chain Trainee</a></li>
          <li class="aResult s4 s5 f5 s6 accounting audit businessAdministration finance isIT"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276478;102116668;o?http://nestlejobs.com/st-louis/nestle-purina-petcare-company/intern-(audit)-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Audit%20Intern&utm_campaign=2013_Nestle_Purina">Audit Internship</a></li>
          <li class="aResult s4 s5 f5 s6 audit isIT"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276477;102116668;n?http://nestlejobs.com/st-louis/nestle-purina-petcare-company/intern-(audit-is_it)-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Audit%20IS/IT%20Intern&utm_campaign=2013_Nestle_Purina">Audit IS/IT Internship</a></li>
          <li class="aResult s4 s5 f5 s6 business finance"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276494;102116668;m?http://nestlejobs.com/st-louis/nestle-purina-petcare-company/intern-(finance)-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Finance%20Intern&utm_campaign=2013_Nestle_Purina">Finance Internship</a></li>
          <li class="aResult s4 s5 f5 s6 accounting"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276493;102116668;l?http://nestlejobs.com/st-louis/nestle-purina-petcare-company/intern-(financial-reporting)-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Financial%20Reporting%20Intern&utm_campaign=2013_Nestle_Purina">Financial Reporting Internship</a></li>
          <li class="aResult f4 s5 mba"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276480;102116668;h?http://nestlejobs.com/st-louis/nestle-purina-petcare-company/intern-marketing-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Marketing%20Intern&utm_campaign=2013_Nestle_Purina">Marketing Internship</a></li>              
          <li class="aResult f4 s5 business logistics supplyChainTransportation"><a class="newwindow" href="http://ad.doubleclick.net/clk;275276479;102116668;p?http://nestlejobs.com/st-louis/nestle-purina-petcare-company/intern-(supply-chain)-jobs/?ss=paid&utm_source=Career%20Connexion&utm_medium=Supply%20Chain%20Intern&utm_campaign=2013_Nestle_Purina">Supply Chain Internship</a></li>
        </ul><!-- positions -->
        <p class="location-note">Many of these positions have multiple openings across the U.S.</p>
      </div><!-- results -->
      <!-- 
      <p class="positionUpdate">Note that several internships and entry level positions are no longer accepting applications.  Be sure to <span class="fb-like" data-href="https://www.facebook.com/NestlePurinaCareers" data-send="false" data-layout="box_count" data-width="150" data-show-faces="false"></span> our Facebook page to hear about the latest updates, or sign up for our <a class="newwindow" href="http://jobs.nestlepurinacareers.com/jobalert/form.alert?ACCT_NAME=nestle&CCC_DEST=purina">email alerts</a> to be notified of new job postings.</p>
      -->
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
        <p class="applyHere"><a class="newwindow" href="https://www.nestlepurinacareers.com/job-search/">Apply Here</a></p>
        <p class="emailAlerts"><a class="newwindow" href="http://m.nestlejobs.com/talentchannel">Email Alerts</a></p>
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