<!DOCTYPE html>
<html>
<head>
	<title>Selecting a Carpooling.</title>
</head>
<body>
	<p>Dear {{$details['FName']}}, </p>
	<br>
	
	<p>This is to inform you that {{$details['FPersonWhoSelectedCarpoo']}} {{$details['LPersonWhoSelectedCarpoo']}} has successfully selected a ride for {{$details['carpoDate']}} from {{$details['cityfrom']}} to {{$details['cityto']}} at {{$details['CarpooAt']}}. </p>
	
	<br>
	<p>Thank you for using our application.</p>
	<p>Sincerely,</p>
	<p>AUIPOCKETS team.</p>
	<hr>
	<span style="color: #001a00; font-size: 45px; font-family:Algerian">AUI</span><span style="color:#003311; font-family: Amasis MT Pro Blackfont-size;font-size:37px;">Pockets</span>
</body>
</html>