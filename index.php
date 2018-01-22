<?php
$data = array(
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
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>
			<?php echo $data['fname']."&nbsp;".$data['lname']?> - Ihre neue Signatur </title>
		<script src="https://use.fontawesome.com/b7915dd188.js"></script>
		<script src="js/clipboard.min.js"></script>
		<style>
			body {
				background: #FDFDF6;
				font-family: Arial, Helvetica, sans-serif;
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
				<p>Nun einfach in die Zwischenablage kopieren, danach in Ihre Outlook-Signatur einfügen.</p>
		</div>
		<div class="wrapper">
			<div id="sig">
				<p style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Mit freundlichen Grüßen<br>
					i.A. <?php echo $data['fname']."&nbsp;".$data['lname']?>
				</p>
				<br><br>
				<style>
				@media screen and (min-width: 601px) {
				    .container {
				        width: 660px!important;
				    }
				}
				</style>

				<!--[if (gte mso 9)|(IE)]>
				<table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
				    <tr>
				        <td>
				<![endif]-->
				<table class="container" width="100%" cellpadding="0" cellspacing="0" style="max-width: 660px;">
				    <tr>
				        <td style="text-align: center; vertical-align: top; font-size: 0;">
				            <!--[if (gte mso 9)|(IE)]>
				            <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
				                <tr>
				                    <td>
				            <![endif]-->
				            <div style="width: 300px; display: inline-block; vertical-align: top;">
				                <table width="100%" height="180px" border="0" cellpadding="0" cellspacing="0">
				                    <tr>
				                        <td style="font-size: 12px;background-color:#ffffff;color:#000000;padding:10px;">
				                          <table border="0" cellpadding="0" cellspacing="0" style="background: none; border-width: 0px; border: 0px; margin: 0; padding: 0;border-collapse:collapse">
				                  					<tr>
																			<td colspan="2" style="padding:0; color: #000000; font-size: 13px; text-align:left">
																				<p style="margin-top:0;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;">
																					<b><?php echo $data['fname']?>&nbsp;<?php echo $data['lname']?></b><br>
																					<?php echo $data['position']?>
																				</p>
																				<p style="margin-top:.5em;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;">
																					<b><?php echo $data['location']?></b><br>
																					<?php echo $data['street']?><br>
																					<?php echo $data['postal_code']?> Berlin - Germany
																				</p>
																				<p style="margin-top:.5em;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;">
																					<?php echo $data['phone']?><br>
																					<a href="<?php echo $data['email']?>" style="color: #667997; text-decoration: none; font-weight: normal; font-size: 13px;font-family: Arial, Helvetica, sans-serif;"><b><?php echo $data['email']?></b></a>
																				</p>
																				<p style="margin-top:.5em;margin-bottom:.5em;font-family: Arial, Helvetica, sans-serif;">
																					<a href="<?php echo $data['promo_url']?>" style="color: #667997; text-decoration: none; font-weight: normal; font-size: 13px;font-family: Arial, Helvetica, sans-serif;"><b><?php echo $shortURL?></b></a>
																				</p>
																				<p style="margin-top:.5em;margin-bottom:0;font-family: Arial, Helvetica, sans-serif;">
																					<?php echo $data['default_slogan']?>
																				</p>
																			</td>
				                  					</tr>
				                  				</table>
				                        </td>
				                    </tr>
				                </table>
				            </div>
				            <!--[if (gte mso 9)|(IE)]>
				            </td>
				            <td>
				            <![endif]-->
				            <div style="width: 300px; display: inline-block; vertical-align: top;overflow:hidden;">
				                <table width="100%" height="180px" border="0" cellpadding="0" cellspacing="0">
				                    <tr>
				                        <td style="font-size: 12px;background-color:#<?php echo $data['background_color']?>;padding:10px;">
				                          <table border="0" align="center" cellpadding="0" cellspacing="0" style="background: none; border-width: 0px; border: 0px; margin: 0; padding: 0;border-collapse:collapse;margin: 0 auto;">

				                						<tr>
				                							<td colspan="2" style="padding:10px; color: #<?php echo $data['em_text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;text-align:center"><a href="<?php echo $data['promo_url']?>" style="color: #<?php echo $data['text_color']?>; text-decoration: none; font-weight: normal; font-size: 13px;font-family: Arial, Helvetica, sans-serif;"><b><?php echo $data['promo_text']?></b></a></td>
				                						</tr>
				                					</table>
				                        </td>
				                    </tr>
				                </table>
				            </div>
				        </td>
				    </tr>
						<tr>
							<td style="padding:5px;text-align:center">
								<p style="font-size: 10px; font-family: Arial, Helvetica, sans-serif;color:#999999"> The Mandala Hotel GmbH. Sitz der Gesellschaft Berlin. Amtsgericht Charlottenburg HRB 68 438.<br> Gesch&auml;ftsf&auml;hrer Lutz Hesse &amp; Christian Andresen</p>
							</td>
						</tr>
				</table>
				<!--[if (gte mso 9)|(IE)]>
				        </td>
				    </tr>
				</table>
				<![endif]-->


			</div>










</div>
<div class="cta">
<button class="btn" data-clipboard-target="#sig"><i class="fa fa-clipboard" aria-hidden="true"></i> In Zwischenablage kopieren</button></div>

<script>new Clipboard('.btn');</script>
</body>
</html>
