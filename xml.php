<?php $userdetails=<<<XML

<userdetails>

	<username>uchendukwe@yahoo.com</username>

	<surname>uchendu Bola</surname>

	<othername>uchenke</othername>

	<address>

		<street>12,bolun street</street>

	<location>Aguda</location>

	<city>Ogba</city>

</address>

</userdetails>

XML;



$var =simplexml_load_string($userdetails);

echo "<pre>".print_r($var,1)."</pre>";

 echo $var->username;




 $userdetails ='{"firstName":"Olamilekan","lastName":"Oludotun","skills":"PHP"}';

echo ($userdetails);

$farm= json_decode($userdetails,true);

echo "<pre>".print_r($farm,1)."</pre>";
