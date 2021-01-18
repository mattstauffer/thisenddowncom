<?php
header("Location: https://mattstauffer.com", TRUE, 301);
exit();


<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>This End Down – Matt Stauffer</title>
	<!-- This code is years, years, years old. Don't judge me. I love you. -->

	<style>
		body {
			background: #fff url("/images/bg.png") repeat-x;
			border-top: 2px solid #3399cc;
			margin: 0;
			padding: 0;
		}
	
		body, td, a, p { font-family: arial, sans-serif; }

		a:link { color: #039; }
		a:visited { color: #666; }
		a:hover { color: #333; }
		a:active { color: #000; }

		h2 { background: #333; color: #fff; margin-left: -10px; padding: 3px 6px; }
		h3 { margin-bottom: 0; padding-bottom: 5px; }
		ul { margin-top: 0; }
		
		.container {
			margin: 40px auto;
			padding-left: 10em;
			position: relative;
			text-align: left;
			width: 35em;
		}
		#ted_logo {
			display: none;
			left: -40px;
			position: absolute;
			top: -40px;
		}
		.profile-pic {
			left: -3.5em;
			position: absolute;
			top: -1em;
			width: 12em;
		}
	</style>
</head>

<body>
	<div class="container">
		<img src="/images/profile-pic.jpg" alt="Profile picture" class="profile-pic">
		
		<p>Hi. My name is Matt Stauffer, and you can find me online in these places.</p>
		<ul>
			<li><a href="http://www.mattstauffer.co/">Mattstauffer.co</a> - web development blog</li>
			<li><a href="http://www.mattstauffer.net/">Mattstauffer.net</a> - bass playing</li>
			<li><a href="http://tighten.co/">Tighten Co.</a> - day job</li>
			<li><a href="https://karaniapp.com/">Karani for Fundraisers</a> - nights/weekend job</li>
			<li><a href="http://www.github.com/mattstauffer">Github: mattstauffer</a></li>
			<li><a href="http://www.twitter.com/stauffermatt">Twitter: stauffermatt</a></li>
			<li><a href="http://www.linkedin.com/in/mattstauffer">Linkedin: Matthew Stauffer</a></li>
		</ul>
		
		<h3>Archived Blogs</h3>
		<ul>
			<li><a href="http://blog.mattstauffer.org/">Stauffer on Staff</a> – old ministry blog</li>
		</ul>

	</div>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-19469774-1']);
	  _gaq.push(['_setDomainName', '.thisenddown.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>
