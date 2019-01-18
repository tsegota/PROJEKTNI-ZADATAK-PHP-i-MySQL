<?php
	#show errors
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu = (int)$_GET['menu']; }
	# Kada kliknete na link radite slanje vrijednosti kroz varijablu. U tom slučaju morate napraviti globalnu varijablu koja će dohvatiti taj podatak. 
	# Da ne pišete svaki puta $_GET['menu'] napravili smo ovdje novu varijablu koja će primiti vrijednost klika na link i zove se $menu
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Smartphones</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Tomislav Šegota">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>

	<div class="banner"></div>
	
	<?php include ("nav.php");
	print '<main>';
	if (!isset($menu) || $menu == 1) {
		print '
		<h1>Smartphones</h1>
		
		<figure>
		
			<img class="image2" src="images/smartphone.jpg" alt="HTML5" title="HTML5"/>
			<figcaption>Smartphones are a class of multi-purpose mobile computing device. Early smartphones were marketed primarily towards the enterprise market, attempting to bridge the functionality of standalone personal digital assistant (PDA) devices with support for cellular telephony, but were limited by their battery life, bulky form factors, and the immaturity of wireless data services. </figcaption>
		
		</figure>
		<p>They are distinguished from feature phones by their stronger hardware capabilities and extensive mobile operating systems, which facilitate wider software, internet (including web browsing over mobile broadband), and multimedia functionality (including music, video, cameras, and gaming), alongside core phone functions such as voice calls and text messaging. Smartphones typically include various sensors that can be leveraged by their software, such as a magnetometer, proximity sensors, barometer, gyroscope and accelerometer, and support wireless communications protocols such as Bluetooth, Wi-Fi, and satellite navigation.</p>
		<p>In the 2000s, BlackBerry, Nokias Symbian platform, and Windows Phone began to gain market traction, with models often featuring QWERTY keyboards or resistive touchscreen input, and emphasizing access to push email and wireless internet.</p>
		<p>Since the 2007 unveiling of the iPhone, the majority of smartphones have featured thin, slate-like form factors, with large, capacitive screens with support for multi-touch gestures rather than physical keyboards, and offer the ability for users to download or purchase additional applications from a centralized store, and use cloud storage and synchronization, virtual assistants, as well as mobile payment services.</p>
		<p>Improving hardware and faster wireless standards (such as LTE) have bolstered the growth of the smartphone industry. In the third quarter of 2012, one billion smartphones were in use worldwide.[1] Global smartphone sales surpassed the sales figures for feature phones in early 2013</p>
		<p>The first commercially available device that could be properly referred to as a "smartphone" began as a prototype called "Angler" developed by Frank Canova in 1992 while at IBM and demonstrated in November of that year at the COMDEX computer industry trade show.[4][5][6] A refined version was marketed to consumers in 1994 by BellSouth under the name Simon Personal Communicator. In addition to placing and receiving cellular calls, the touchscreen-equipped Simon could send and receive faxes and emails. It included an address book, calendar, appointment scheduler, calculator, world time clock, and notepad, as well as other visionary mobile applications such as maps, stock reports and news.[7] The term "smart phone" or "smartphone" was not coined until a year after the introduction of the Simon, appearing in print as early as 1995, describing AT&Ts PhoneWriter Communicator.</p>
		<p>Source: <a href="https://www.gsmarena.com/" target="_blank">GSMArena</a></p>
		<p>Social media:<br>
			<a href="https://www.facebook.com/GSMArenacom-189627474421/" target="_blank"><img src="images/facebook.img" alt="Facebook" title="Facebook" style="width:24px; margin-top:0.4em"></a>
			<a href="https://twitter.com/gsmarena_com" target="_blank"><img src="images/twitter.png" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
			<a href="https://plus.google.com/+gsmarena?prsrc=3" target="_blank"><img src="images/google-plus.png" alt="Google+" title="Google+" style="width:24px; margin-top:0.4em"></a>
			<a href="https://www.youtube.com/channel/UCbLq9tsbo8peV22VxbDAfXA?sub_confirmation=1" target="_blank"><img src="images/youtube.jpg" alt="Youtube" title="Youtube" style="width:24px; margin-top:0.4em"></a>
		</p>';

			
	}
	
	else if ($menu == 2) {
		print '
		<h1>News</h1>';
		// ovdje ide news
		include ("newsmain.php");
	}
	else if ($menu == 3) {
		print '
		<h1>Contact form</h1>';
		// ovdje ide Contact
		include ("contact.php");
	}
	else if ($menu == 4) {
		print '
		<h1>About Us</h1>';
		// ovdje ide Contact
		include ("about.php");
	}
	else if ($menu == 5) {
		print '
		<h1>Gallery</h1>';
		// ovdje ide Contact
		include ("gallery.php");
	}
	else if ($menu == 6) {
		print '
		<h1>Registration</h1>';
		// ovdje ide Registration
		include ("registration.php");
	}
	else if ($menu == 7) {
		print '
		<h1>Sign In</h1>';
		// ovdje ide Sign In
		include ("signin.php");
	}
	print '
	</main>';
	include ("footer.php");
	?>
	
	</body>
</html>