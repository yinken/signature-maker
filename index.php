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
	'utm' => '?utm_source=signature&utm_medium=email'
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
<head>
    <meta charset="utf-8">
    <title><?php echo $data['fname']."&nbsp;".$data['lname']?> - Ihre neue Signatur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" />
		<script src="js/clipboard.min.js"></script>
		<script src="https://use.fontawesome.com/b7915dd188.js"></script>
  </head>
  <body>
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Signature Maker 3.0
          </h1>
          <h2 class="subtitle">
           Erstellt eine passende E-Mail Signatur
          </h2>
        </div>
      </div>
    </section>
		<section class="section" style="display:none">
			<div class="container">
				<div class="columns is-centered">
					<div class="column is-8">
						<div class="field">
							<p class="control has-icons-left has-icons-right">
								<input id="formName" class="input" type="text" placeholder="Ihr Name" onkeyup="writeInput('name',this)">
								<span class="icon is-small is-left">
									<i class="fa fa-envelope"></i>
								</span>
								<span class="icon is-small is-right">
									<i class="fa fa-check"></i>
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="container">
				<div class="columns is-centered">
					<div class="message is-primary">
						<div class="message-header">
							<h1> Herzlichen Glückwunsch, <?php echo $data['fname']?><h1>
						</div>
						<div class="message-body">							
							<h2> Hier ist Ihre neue Signatur</h2>
							<p>Nun einfach in die Zwischenablage kopieren, danach in Ihre Outlook-Signatur einfügen. <small><a href="https://www.google.de/search?q=outlook+signatur+%C3%A4ndern" target="_blank">Wie geht das?</a></small></p>
							</p>
							<p>&nbsp;</p>
							<div class="field is-grouped is-grouped-centered">
								<p class="control">
									<a class="button is-primary" data-clipboard-target="#sig">
										<span class="icon is-small">
											<i class="fa fa-clipboard"></i>
										</span>
										<span>
											In Zwischenablage kopieren
										</span>
									</a>									
								</p>
							</div>
							<script>new Clipboard('.button');</script>							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section">			
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-8">						
            <div class="box">							
							<div id="sig">								
								<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Mit freundlichen Grüßen<br>
									i.A. <?php echo $data['fname']."&nbsp;".$data['lname']?>
								</p>
								<br><br>
								<p id="name" style="margin-top:0;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;font-size: 13px;">
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
									<a href="<?php echo $data['default_url'].$data['utm']?>" style="color: #000000; text-decoration: none; font-weight: normal; "><b><?php echo $shortURL?></b></a>&nbsp;&nbsp;<?php echo $data['default_slogan']?>
								</p>
								<p style="margin-top:.5em;margin-bottom:1em;font-size: 13px; font-family: Arial, Helvetica, sans-serif;">
									<a href="<?php echo $data['promo_url'].$data['utm']?>" style="color: #<?php echo $data['text_color']?>; text-decoration: none; font-weight: normal;"><b><?php echo $data['promo_text']?>&nbsp;&#187;</b></a>
								</p>
								<p style="margin-top:.5em;font-size: 8px; font-family: Arial, Helvetica, sans-serif;color:#999999">
									The Mandala Hotel GmbH &#8226; Sitz der Gesellschaft Berlin &#8226; Amtsgericht Charlottenburg HRB 68 438<br> Gesch&auml;ftsf&uuml;hrer Lutz Hesse &amp; Christian Andresen
								</p>
								<p style="margin-top:.5em;font-size: 8px; font-family: Arial, Helvetica, sans-serif;color:#999999">
									<em>Hinweis zum Datenschutz:</em> Wir sind sehr darum bemüht, all unseren Interessenten, Kunden und Geschäftspartnern einen ausgezeichneten Service zu bieten.<br>Dazu gehört auch der Schutz ihrer Daten. Informationen zur Erhebung und Verarbeitung personenbezogener Daten können Sie unserer <a href="<?php echo $data['default_url']?>/de/datenschutz<?php echo $data['utm'] ?>">Datenschutzerklärung</a> entnehmen.
								</p>
							</div>
          </div>
        </div>				
      </div>
    </section>
	<script>
		function writeInput(target,el) {
			target = document.getElementById(target);
			console.log(el.value);
			target.innerHTML = el.value
		}
		
	</script>
  </body>
</html>

