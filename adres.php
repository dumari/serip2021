
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

print "Hello world!";
print($ipaddress);
mail("dusica@simula.no","My subject",$ipaddress);
mail("dusica@simula.no","My subject","Hello world!");


