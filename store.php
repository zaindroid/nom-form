<?php
if (isset($_POST["SSID"]) && isset($_POST["password"]))
{ 
	$ssid=$_POST["SSID"];
	$password=$_POST["password"];
	$myFile = "/etc/wpa_supplicant/wpa_supplicant.conf";
		if (is_writable($myFile)) {
		echo 'The file is writable';
	} else {
		echo 'The file is not writable';
			}
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = "network={\n\tssid=\"".$ssid."\"\n\tpsk=\"".$password."\"\n\tkey_mgmt=WPA-PSK\n}";
	fwrite($fh,"\n");
uj	fwrite($fh, $stringData);
	//fwrite($fh,"\r\n");
	fclose($fh);
}

?>