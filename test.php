<?php
//http://www.mathworks.com/matlabcentral/answers/94117-how-do-i-set-a-proxy-server-to-use-with-the-urlread-and-urlwrite-functions-in-matlab
	$v = $_SERVER['REQUEST_METHOD'];
	if($v=='POST')
	{
		$json = file_get_contents('php://input');
		$x=urldecode($json);
		file_put_contents("data3.txt", $x);

	}
	if($v=='GET')
	{
		$z=file_get_contents("data3.txt");
		echo $z;
	}
	
	
?>