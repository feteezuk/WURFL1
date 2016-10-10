<!DOCTYPE html>
<html>
<meta name="description" content="working with WURFL database">
<title>Detecting your Device</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'src/autoload.php';

$config = new ScientiaMobile\WurflCloud\Config();

$config->api_key = '471134:ER4AyJQhGeNmaIEmbPwwVsFIJBRm2f5Z';

$client = new ScientiaMobile\WurflCloud\Client($config);

$client->detectDevice();

if ($client->getDeviceCapability('is_mobile')): ?>
<body style="background-color:yellow;">
<h2 style="text-align:center; color:red">This is MObile Version</h2>
<div style="width:100%; font-weight:bold; background-color:yellow;">


<?php else: ?>
	<body style="background-color:green">
		
	
<h2 style="text-align:center; color:red">This is DESKTOP Version</h2>
<div style="width:90%; margin:0 auto; border:2px solid blue;">
</div>
<?php endif; ?>
<p>I am testing the 'is_mobile' capability' in this example. The Mobile Version will have the Title 'This is Mobile VErsion' and if it's a desktop version, the title will say 'This is a desktop version'. </p>

<hr>

 <p>The background color will be green if it's a desktop version. If it is a smartphone, the background color will be yellow for mobile version</p>
</div>
</body>
</html>