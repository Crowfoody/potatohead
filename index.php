							<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Redirect Checker | Check your Statuscode 301 vs 302</title>
	<meta name="description" content="Check your URL redirect for accuracy. Our Redirect Checker will analyse all redirections. Try Now!" />
	<meta name="robots" content="index,follow" />	
	<link rel="author" href="https://plus.google.com/112460981671923325751"/>
	
	<link rel="stylesheet" type="text/css" href="https://www.redirect-checker.org/styles/styles.css" />
	<script type="text/javascript">	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-35733365-1'], ["_gat._anonymizeIp"], ['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();


	  

		if (document.referrer.match(/google\.(de|at|com|ch|co|ac|ad|ae|al|am|as|az|ba|be|bf|bg|bi|bj|bs|by|ca|cc|cd|cf|cat|cg|ci|cl|cm|cn|cv|cz|dj|dk|dm|dz|ee|es|fi|fm|fr|ga|ge|gf|gg|gl|gm|gp|gr|gy|hn|hr|ht|hu|iq|ie|im|io|is|it|je|jo|ki|kg|kz|la|li|lk|lt|lu|lv|md|me|mg|mk|ml|mn|ms|mu|mv|mw|ne|nl|no|nr|nu|pl|pn|ps|pt|ro|rs|ru|rw|sc|se|sh|si|sk|sn|sm|so|st|td|tg|tk|tl|tm|to|tt|ua|us|vg|vn|vu|ws)/gi) && document.referrer.match(/cd/gi)) {
			var myString = document.referrer;
			var g        = myString.match(/google\.(.*?)(\/|\?)/);
			var vmatch = /(imgres|search|url|catalog)(\?)/i.exec( myString );
			var r        = myString.match(/cd=(.*?)&/);
			var rank     = parseInt(r[1]);
			var kw       = myString.match(/q=(.*?)&/);
          
			if (kw[1].length > 0) {
				var keyWord  	= decodeURI(kw[1]);
			} else {
				keyWord 		= "(not provided)";
			}
			if(vmatch[ 1 ].length > 0) {
				var v = vmatch[ 1 ];
			} else {
				v = "not set";
			}	
			if (g[1].length > 0) {
				var ranktracker = "RankTracker_" + g[1] + " [" + v + "]";	
			} else {
				ranktracker 	= 'RankTracker';
			}

			var p        = document.location.pathname;
			_gaq.push(['_trackEvent', ranktracker , keyWord, p, rank, true]);
		}
	</script>
		<script type="text/javascript" src="https://www.redirect-checker.org/scripts/jquery.1.7.js"></script>
		<script async="" defer="" src="//survey.g.doubleclick.net/async_survey?site=32olb37nfco2xf5qlev2j2p3gy"></script>

</head>

<body>
	<div id="warper">
	    <h1><a title="Redirect Checker" href="https://www.redirect-checker.org/">Check Your Redirects and Statuscode</a></h1>
	
		<h2>301 vs 302, meta refresh &amp; javascript redirects</h2>

		<form action="https://www.redirect-checker.org/index.php" method="post">
		
			<input type="hidden" name="nirm" value="49b02b9046aca80919ddcb2c1f99eca55bffcaa6"/>
		<div id="redirectform">
			<div style="background-image:url( https://www.redirect-checker.org/media/images/form.gif ); margin: 0 20px 0 0;float:lefT; width: 422px; height: 63px;">
				<input placeholder="please add http:// or https://" type="text" id="redirecturl" name="redirecturl_i_want_and_not_you" value=""/>
			</div>
			
	        <input style="float:left;"  id="sitemapsubmit" name="analyse" type="image" src="https://www.redirect-checker.org/media/images/button.png" />
	
			<div class="clearfix"></div>
			<p>
				<strong>add http:// or https:// on your URL.</strong><br/><br/>
			</p>
			
			<h3>Redirect Checker Options:</h3>
			<p>
				You what to check your redirect with a specific user-agent. Just select the browser user-agent to test your redirect.
			</p>
			<div style="margin:1em 0 3em 0">
				Set User-Agent: 
				<select name="useragent">
		<option value="0000">DEFAULT (ToolBot)</option>
		<option value="1000">BROWSER - Chrome 34</option>
		<option value="1010">BROWSER - Firefox 3.6</option>
		<option value="1020">BROWSER - Firefox 9.0</option>
		<option value="1030">BROWSER - Internet Explorer 6</option>
		<option value="1031">BROWSER - Internet Explorer 7</option>
		<option value="1032">BROWSER - Internet Explorer 8</option>
		<option value="1033">BROWSER - Internet Explorer 9</option>
		<option value="1034">BROWSER - Internet Explorer 10</option>
		<option value="1050">BROWSER - Opera 12.00</option>
		<option value="1060">BROWSER - Safari 5.0.4</option>
		<option value="2000">MOBILEDEVICE - iPad</option>
		<option value="2020">MOBILEDEVICE - iPhone 4</option>
		<option value="2021">MOBILEDEVICE - iPhone 5</option>
		<option value="2050">MOBILEDEVICE - Android 2.3</option>
		<option value="2060">MOBILEDEVICE - AT	Android Tablet (Galaxy)</option>
		<option value="2070">MOBILEDEVICE - Android (Droid 2)</option>
		<option value="2100">MOBILEDEVICE - Kindle</option>
		<option value="2150">MOBILEDEVICE - Windows Phone 7</option>
		<option value="2200">MOBILEDEVICE - Nokia 7110</option>
		<option value="2300">MOBILEDEVICE - Nexus 5 (Android Phone)</option>
		<option value="2301">MOBILEDEVICE - Nexus 10</option>
		<option value="3000">SEARCHBOT - Googlebot</option>
		<option value="3001">SEARCHBOT - GoogleAdsBot</option>
		<option value="3002">SEARCHBOT - Googlebot-Mobile Smartphone (OLD)</option>
		<option value="3003">SEARCHBOT - Googlebot-Mobile Smartphone (2016-04-21)</option>
		<option value="3004">SEARCHBOT - Googlebot-Mobile Smartphone (2020-01-08 Chrome/41.0.2272.96)</option>
		<option value="3005">SEARCHBOT - Googlebot-Mobile</option>
		<option value="3006">SEARCHBOT - Googlebot-Mobile DoCoMo</option>
		<option value="3100">SEARCHBOT - Yahoobot</option>
		<option value="3110">SEARCHBOT - BingBot</option>
		<option value="3120">SEARCHBOT - YandexBot</option>
		<option value="3130">SEARCHBOT - BaiduSpider</option>
		<option value="3140">SEARCHBOT - NaverBot</option>
		<option value="3150">SEARCHBOT - Seznam</option>
		<option value="4000">GAMING PLATTFORM - Playstation 3</option>
		<option value="4001">GAMING PLATTFORM - Playstation 4</option>
		<option value="4010">GAMING PLATTFORM - Nintendo WiiU</option>
		<option value="4020">GAMING PLATTFORM - XBox One</option>
		<option value="4021">GAMING PLATTFORM - XBox 360</option>
				</select>
			</div>
	
			<p class="manual">Check your URL redirect for accuracy. Do you use search engine friendly redirections like to many redirects or do you loose link juice for seo by redirects using HTTP Statuscode 301 vs. 302. Check now!</p>
			
		</div>
		</form>
		

	
		 <div style="margin:0 20px">
	

		<p><br/></p>
		<p><br/></p>
		
		<h2>Features</h2>
		
		<p>
			This Redirect Checker supports several features like: 
		</p>
		<ul>
			<li>&middot; Select different User Agents like<br/>
				&nbsp;&nbsp;&nbsp;&middot; Desktop-Browsers (Chrome, Internet Explorer, Safari, Firefox,...)<br/>
				&nbsp;&nbsp;&nbsp;&middot; Mobile Devices (IPad, Iphone, Android, Windows Phone, Kindle, Nokia...<br/>
				&nbsp;&nbsp;&nbsp;&middot; Search Engine Bots (GoogleBot, Google Mobile Bot, Yandex, BingBot, Baidu, Yahoo Slurp, Naver,...</li>
			<li>&middot; checking 302 and 301 redirects</li>
			<li>&middot; supports &amp; checks https redirects</li>
			<li>&middot; checks meta refresh redirects</li>
			<li>&middot; analysis of common javascript redirects</li>			
			<li>&middot; check and show redirect chains</li>
			<li>&middot; check http headers like Status Code, X-Robots-Tag, Rel Canonical Header Tag "Link:"</li>
		</ul>
		<p><br/></p>
		<p><br/></p>
	</div>

		<div class="social_share">
			<a onclick="_gaq.push(['_trackEvent', 'social', 'facebooks', 'checker']);"  href="http://www.facebook.com/sharer.php?u=&amp;t=Redirect%20Checker%20-%20Check%20Your%20Redirects%20Fast%20and%20Easy." id="facebookBut"></a>
			<a onclick="_gaq.push(['_trackEvent', 'social', 'twitter', 'checker']);"  href="http://twitter.com/home?status=I%27m%20just%20checking%20my%20Redirects%20with%20a%20fast%20and%20easy%20tool.%20http://bit.ly/RR2a28" id="twitterBut"></a>
       	</div>
		<div class="clearfix"></div>
		<div class="footer">

			<p>Thank you for sharing our "Redirect Checker".</p>
			<p>
 			&copy; <a title="SERP Eye" href="http://www.serp-eye.com/">SERP-Eye</a><br/>
			Best Solutions for Webmasters, SEOs and Online Marketeers
			</p>
			<p>You like our tool or but are missing particular features? Do not hesitate and tell us.</p>
           
           	<p><a title="Redirect Checker - Check 301, 302, 307, Meta Refreshs and Javascript Redirects." href="https://www.redirect-checker.org/">Check Your Redirects</a> | <a title="Bulk Redirect Checker" href="https://www.redirect-checker.org/bulk-redirect-checker.php">Bulk Checker</a> |  <a title="Imprint" href="https://www.redirect-checker.org/imprint.php">Imprint</a> | <a title="FAQ - Q&A on SEO and Redirects" href="https://www.redirect-checker.org/faq.php">FAQ</a> | <a title="Contact" href="https://www.redirect-checker.org/contact.php">Contact</a></p>
		</div>
<script type="text/javascript" src="https://www.redirect-checker.org/scripts/jquery.1.7.js"></script>
<script type="text/javascript" src="https://www.redirect-checker.org/scripts/cookie.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
cli_show_cookiebar({
html: '<div id="cookie-law-info-bar"><span>Wir verwenden Cookies, damit Sie die Funktionen unserer Website optimal nutzen können. Weitere Informationen finden Sie hier: <a href=\"https://www.redirect-checker.org/imprint.php\" id=\"CONSTANT_OPEN_URL\" target=\"_new\"  class=\"cli-plugin-main-link\" >Datenschutz</a> <a href=\"#\" id=\"cookie_action_close_header\"  class=\"medium cli-plugin-button cli-plugin-main-button\" >OK</a></span></div>',
settings: '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#333","border":"#444","border_on":true,"button_1_button_colour":"#ffffff","button_1_button_hover":"#cccccc","button_1_link_colour":"#020202","button_1_as_button":true,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#ffffff","button_2_as_button":false,"font_family":"inherit","notify_animate_hide":true,"notify_animate_show":true,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"top","showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#ffffff","show_once_yn":false,"show_once":"10000"}'
});});
</script>
		
		
		<p>
			<strong>Tool Tip:</strong> You are interested in more tools, tham please visit the tools suite <a href="http://www.serp-perception.com/?utm_source=redirect-checker.org&utm_medium=partner&utm_campaign=link">http://www.serp-perception.com</a>.  
		</p>
		


	</div>
	<script type="text/javascript" src="https://www.redirect-checker.org/scripts/cookie.min.js"></script>
	<script type="text/javascript">
jQuery(document).ready(function() {
cli_show_cookiebar({
html: '<div id="cookie-law-info-bar"><span>Wir verwenden Cookies, damit Sie die Funktionen unserer Website optimal nutzen können. Weitere Informationen finden Sie hier: <a href=\"https://www.redirect-checker.org/imprint.php\" id=\"CONSTANT_OPEN_URL\" target=\"_new\"  class=\"cli-plugin-main-link\" >Weitere Informationen</a> <a href=\"#\" id=\"cookie_action_close_header\"  class=\"medium cli-plugin-button cli-plugin-main-button\" >OK</a></span></div>',
settings: '{"animate_speed_hide":"500","animate_speed_show":"500","background":"#333","border":"#444","border_on":true,"button_1_button_colour":"#ffffff","button_1_button_hover":"#cccccc","button_1_link_colour":"#020202","button_1_as_button":true,"button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#ffffff","button_2_as_button":false,"font_family":"inherit","notify_animate_hide":true,"notify_animate_show":true,"notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"top","showagain_tab":false,"showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#ffffff","show_once_yn":false,"show_once":"10000"}'
});});
</script>
</body>
</html>