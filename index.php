<?php
$smLinks = array(
	'instagram' => array(
		'tmh' => 'https://www.instagram.com/themandalahotel/',
		'facil' => 'https://www.instagramm.com/restaurant_facil/',
		'onospa' => 'https://www.instagram.com/ono.spa/',
		'qiu' => 'https://www.instagram.com/qiubar/'
	),
	'facebook' => array(
		'tmh' => 'https://www.facebook.com/themandala.de/',
		'facil' => 'https://www.facebook.com/restaurantFACIL',
		'onospa' => 'https://www.facebook.com/onospaberlin',
		'qiu' => 'https://www.facebook.com/QIU-Bar-Restaurant-277507898634/'
	),
	'youtube' => array(
		'tmh' => 'https://www.youtube.com/user/themandalahotel/'
	),
	'googleplus' => array(
		'tmh' => 'https://plus.google.com/+THEMANDALAHOTEL',
		'onospa' => 'https://plus.google.com/+onospa',
	)
);


$data = array(
	'outlet' => str_replace(' ','',strtolower($_GET['outlet'])),
	'fname' => urldecode($_GET['fname']),
	'lname' => urldecode($_GET['lname']),
	'position' => urldecode($_GET['position']),
	'email' => $_GET['email'],
	'phone' => $_GET['phone'],
	'location' => $_GET['location'],
	'background_color' => $_GET['background_color'],
	'logo' => $_GET['logo'],
	'em_text_color' => $_GET['em_text_color'],
	'text_color' => $_GET['text_color'],
	'street' => $_GET['street'],
	'postal_code' => $_GET['postal_code'],
	'default_url' => $_GET['default_url'],
	'default_slogan' => urldecode($_GET['default_slogan']),
	'promo_url' => $_GET['promo_url'],
	'promo_text' =>urldecode($_GET['promo_text']),
	'promo_cta' => $_GET['promo_cta'],
);
$input = $data['default_url'];
// in case scheme relative URI is passed, e.g., //www.google.com/
$input = trim($input, '/');
// If scheme not included, prepend it
if (!preg_match('#^http(s)?://#', $input)) {
    $input = 'http://' . $input;
}
$urlParts = parse_url($input);
// remove www
$domain = preg_replace('/^www\./', '', $urlParts['host']);
$shortURL = $domain;
// output: google.co.uk

$length = count($smLinks);
foreach ($smLinks as $key => $value) {
	$icon = $value[$data['outlet']];
	if(isset($icon)) {
		$smIcons .= '<a href="'.$icon.'"><img height="16" width="16" src="https://www.themandala.de/site/templates/img/sig/sig_icon-'.$key.'_'.$data['text_color'].'.gif" /></a>&nbsp;';
	} else {
		$smIcons .= '';
	}
}


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			<?php echo $data['fname']."&nbsp;".$data['lname']?> - Ihre neue Signatur
		</title>
		<script src="https://use.fontawesome.com/b7915dd188.js"></script>
		<script src="js/clipboard.min.js"></script>
		<style>
			body {
				background: #FDFDF6;
				font-family: Arial, Helvetica, sans-serif;
			}
			a {
				text-decoration: none;
			}
			.header,
			.wrapper,
			.cta {
				width: 100%;
				max-width: 980px;
				margin: 0 auto;
			}
			.header {
				text-align: center;
			}
			.wrapper {
				padding: 10px;
				border: 1px solid #eee;
				border-radius: 2px;
				background: #ffffff;
			}
			.cta {
				padding: 10px;
				text-align: center;
			}
			</style>
	</head>
	<body>
		<div class="header">
			<h1> Herzlichen Glückwunsch, <?php echo $data['fname']?><h1>
			<h2> Hier ist Ihre neue Signatur</h2>
			<p>Nun einfach in die Zwischenablage kopieren, danach in Ihre Outlook-Signatur einfügen. <small><a href="https://www.google.de/search?q=outlook+signatur+%C3%A4ndern" target="_blank">Wie geht das?</a></small></p>
			</p>
		</div>
		<div class="wrapper">
			<div id="sig">
				<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Mit freundlichen Grüßen<br>
					i.A. <?php echo $data['fname']."&nbsp;".$data['lname']?>
				</p>
				<br><br>
				<p style="margin-top:0;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;font-size: 13px;">
					<b><?php echo $data['fname']?>&nbsp;<?php echo $data['lname']?></b><br>
					<?php echo $data['position']?>
				</p>
				<p style="margin-top:.5em;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;font-size: 13px;">
					<b><?php echo $data['location']?></b><br>
					<?php echo $data['street']?><br>
					<?php echo $data['postal_code']?> Berlin - Germany
				</p>
				<p style="margin-top:.5em;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;font-size: 13px;">
					<?php echo $data['phone']?><br>
					<a href="mailto:<?php echo $data['email']?>" style="color: #<?php echo $data['text_color']?>; text-decoration: none; font-weight: normal; font-size: 13px;font-family: Arial, Helvetica, sans-serif;"><b><?php echo $data['email']?></b></a>

				<p style="margin-top:0;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;font-size: 13px;">
					<?php echo $smIcons?></p>
				</p>
				<p style="margin-top:.5em;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;font-size: 13px">
					<a href="<?php echo $data['default_url']?>" style="color: #000000; text-decoration: none; font-weight: normal; "><b><?php echo $shortURL?></b></a>&nbsp;&nbsp;<?php echo $data['default_slogan']?>
				</p>
				<p style="margin-top:.5em;margin-bottom:1em;font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
					<a href="<?php echo $data['promo_url']?>" style="color: #<?php echo $data['text_color']?>; text-decoration: none; font-weight: normal;"><b><?php echo $data['promo_text']?>&nbsp;&#187;</b></a>
				</p>
				<p style="margin-top:.5em;font-size: 8px; font-family: Arial, Helvetica, sans-serif;color:#999999">
					The Mandala Hotel GmbH &#8226; Sitz der Gesellschaft Berlin &#8226; Amtsgericht Charlottenburg HRB 68 438<br> Gesch&auml;ftsf&uuml;hrer Lutz Hesse &amp; Christian Andresen
				</p>
				<p style="margin-top:.5em;font-size: 8px; font-family: Arial, Helvetica, sans-serif;color:#999999">
					<em>Hinweis zum Datenschutz:</em> Wir sind sehr darum bemüht, all unseren Interessenten, Kunden und Geschäftspartnern einen ausgezeichneten Service zu bieten.<br>Dazu gehört auch der Schutz ihrer Daten. Informationen zur Erhebung und Verarbeitung personenbezogener Daten können Sie unserer <a href="<?php echo $data['default_url']?>/de/datenschutz">Datenschutzerklärung</a> entnehmen.
				</p>
			</div>
		</div>
		<div class="cta">
			<button class="btn" data-clipboard-target="#sig"><i class="fa fa-clipboard" aria-hidden="true"></i> In Zwischenablage kopieren</button>
		</div>
		<script>new Clipboard('.btn');</script>
	</body>
</html>
