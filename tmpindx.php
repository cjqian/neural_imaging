<html>
<title>HI!</title>
</head>
<body>
<?php


$output = shell_exec("sudo -u root /var/www/html/neural.sh");

$art = "examples/inputs/starry_night.jpg";
$source = "examples/inputs/brad_pitt.jpg";

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
#$output = shell_exec('echo $LUA_PATH; echo $LUA_CPATH; ./neural.sh /home/ubuntu/neural-style/examples/inputs/starry_night.jpg /home/ubuntu/neural-style/examples/inputs/brad_pitt.jpg 2>&1');
 
echo $output;
?>

<img src ="out.png"></img>
</body>
</html>
