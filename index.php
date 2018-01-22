<?php

$data = array(
	'fname' => utf8_decode(urldecode($_GET['fname'])),
	'lname' => utf8_decode(urldecode($_GET['lname'])),
	'position' => utf8_decode(urldecode($_GET['position'])),
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
	'promo_url' => $_GET['promo_url'],
	'promo_text' => utf8_decode(urldecode($_GET['promo_text'])),
	'promo_cta' => $_GET['promo_cta'],
);

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $data['fname']."&nbsp;".$data['lname']?> - Ihre neue Signatur </title>
                <script src="https://use.fontawesome.com/b7915dd188.js"></script>
                <script src="js/clipboard.min.js"></script>
<style>
body {
background: #FDFDF6;
font-family: Arial, Helvetica, sans-serif;
}
.header, .wrapper, .cta {
width: 100%;
max-width:980px;
margin:0 auto;
}

.header {
text-align:center;
}

.wrapper {
padding:10px;
border:1px solid #eee;
border-radius: 2px;
background: #ffffff;
}

.cta {
padding:10px;
text-align:center;
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
i.A. <?php echo $data['fname']."&nbsp;".$data['lname']?></p><br>
<br>

<table border="0" cellpadding="0" cellspacing="0" style="border-width: 0; border: 0px; margin: 0; padding: 0;max-width:700px;">
		<tr>
			<td style="padding-top: 6px; padding-bottom: 0; padding-left: 45px; padding-right: 45px; border-top: 0; border-bottom: 0; border-left: 0; border-right: solid 2px #ffffff; border-collapse:collapse;background: #<?php echo $data['background_color']?>;vertical-align:middle;" valign="middle">
				<a href="<?php echo $data['default_url']?>"><img id="preview-image-url" width="85" height="85" src="https://www.themandala.de/site/templates/img/newsletter/sig_<?php echo $data['logo']?>.png"></a></td>
			<td style="padding-top: 6px; padding-bottom: 0; padding-left: 25px; padding-right: 12px;border:0;background: #<?php echo $data['background_color']?>;width:250px" width="250">
				<table border="0" cellpadding="0" cellspacing="0" style="background: none; border-width: 0px; border: 0px; margin: 0; padding: 0;">
					<tr>
						<td colspan="2" style="padding-bottom: 2px; color: #<?php echo $data['em_text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><strong><?php echo $data['fname']?>&nbsp;<?php echo $data['lname']?></strong></td>
					</tr>
					<tr>
						<td colspan="2" style="padding-bottom: 5px; color: #<?php echo $data['text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><?php echo $data['position']?></td>
					</tr>
					<tr>
						<td colspan="2" style="color: #<?php echo $data['em_text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;"><strong><?php echo $data['location']?></strong></td>
					</tr>

					<tr>

						<td style="vertical-align: top; color: #<?php echo $data['text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;" valign="top"><?php echo $data['street']?></td>
					</tr>
					<tr>

						<td style="padding-bottom: 5px; vertical-align: top; color: #<?php echo $data['text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;" valign="top"><?php echo $data['postal_code']?> Berlin - Germany</td>
					</tr>
					<tr>

						<td style="vertical-align: top; color: #<?php echo $data['text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;" valign="top"><?php echo $data['phone']?></td>
					</tr>
					<tr>

						<td style="padding-bottom: 10px; vertical-align: top; color: #<?php echo $data['text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;" valign="top">
							<a href="mailto:<?php echo $data['email']?>" style="color: #<?php echo $data['text_color']?>; text-decoration: none; font-weight: normal; font-size: 13px;"><?php echo $data['email']?></a>
						</td>
					</tr>
					<tr>

						<td style="padding-bottom: 10px; vertical-align: top; color: #<?php echo $data['text_color']?>; font-size: 13px; font-family: Arial, Helvetica, sans-serif;" valign="top">
							A Member of Design Hotels&trade;
						</td>
					</tr>
					<tr>


					</tr>
				</table>
			</td>
			<td width="220" style="padding-top: 6px; padding-bottom: 0; padding-left: 50px; padding-right: 25px; border:0;background: #<?php echo $data['background_color']?>;vertical-align:middle;font-family: Arial;font-size: 13px;color:#<?php echo $data['text_color']?>;text-align:center;width:220px;" valign="middle">
				<table valign="middle" align="center"  style="border-width: 0; border: 0px; margin: 0; padding: 0;">
					<tr>
						<td style="color:#<?php echo $data['em_text_color']?>;font-family: Arial;text-align:center;font-size: 13px"><?php echo $data['promo_text']?><br><br></td>
					</tr>
					<tr>
						<td style="border:2px solid #<?php echo $data['em_text_color']?>;padding:5px;width:150px;text-align:center">
							<a href="<?php echo $data['promo_url']?>" style="color:#<?php echo $data['em_text_color']?>;font-family: Arial;font-weight:600;text-decoration:none;font-size: 13px"><?php echo $data['promo_cta']?></a></td>
					</tr>
				</table>
				</td>
		</tr>
	</table>
<br>
    <p style="font-size: 10px; font-family: Arial, Helvetica, sans-serif;color:#999999"> Sitz der Gesellschaft Berlin&#8232;Amtsgericht Charlottenburg HRB 68 438&#8232;Geschäftsführer Lutz Hesse & Christian Andresen</p>
<p style="font-size: 10px; font-family: Arial, Helvetica, sans-serif;color:#999999">Diese E-Mail enthält vertrauliche und/oder rechtlich geschützte Informationen. Wenn Sie nicht der richtige Adressat sind oder diese E-Mail irrtümlich<br>
erhalten haben, informieren Sie bitte sofort den Absender und vernichten Sie diese Mail. Das unerlaubte Kopieren sowie die unbefugte Weitergabe <br>
dieser Mail ist nicht gestattet.<br>
This e-mail may contain confidential and/or privileged information. If you are not the intended recipient (or have received this e-mail in error) <br>
please notify the sender immediately and destroy this e-mail. Any unauthorized copying, disclosure or distribution of the material in this e-mail <br>
is strictly forbidden.</p>
<p><font color="#006600" face="Webdings" size="+2">P</font><font color="#006600"> <strong style="font-size: 10px; font-family: Arial, Helvetica, sans-serif">Please consider the environment before printing this email.</strong></font></p>
</div>
</div>
<div class="cta">
<button class="btn" data-clipboard-target="#sig"><i class="fa fa-clipboard" aria-hidden="true"></i> In Zwischenablage kopieren</button></div>

<script>new Clipboard('.btn');</script>
</body>
</html>
		