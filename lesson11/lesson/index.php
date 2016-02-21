<div class="asdasd">
	
	
<?php 
/*
	$a = "5"; // string
	$b = 5; // integer
	$c = 5.4; // float
	
		 // 5	+ 5  + 5.4 = 15.4		  
	$d = $a + $b + $c;
		// 555.4
	$e = $a.$b.$c;
	
	//+ add
	//. concat 
	
	
	
	echo "our E variable is: ".$e."<br>";
	*/
/*

	$a = "a3";
	$b = "b6";
	
	echo $a + $b;
	echo "<br>";
	
	$a = "36a";
	$b = "b11";
	
	echo $a + $b;
	echo "<br>";
	//36ab11
	echo $a.$b;*/
	
	//#451A4662F
	
	$a = "75";
	
	 "<div><br><br>My Next Birthday WIll make me $a years old<div>";
	
	 '<br><br>My Next Birthday WIll make me $a years old';
	
	/*
	$z = 11;
	$x = 'y';
	$y = '$z';
	
	
	echo $$x; // "$z";
	
	$x = 'y';
	$$x;*/
	/*
	$x = 'y';
	$y = 'z';
	$z = 5;
	
	$$$x;
	 $$y;
	  $z; 
	// $x = "$y";
	
	$_GET;
	$_POST;
	$_REQUEST;
	$_SERVER;
		echo"<pre>";
	print_r($_GET	);
	print_r($_POST	);
	print_r($_REQUEST);

	//echo"<pre>";
	print_r($_SERVER);
	*/
	
	echo"<pre>";
	/*$a = 5; // 7
	

	function test()
	{
		global $a;
		$a = 7;
		echo $a."<br>";
	}
	
	
	
	test();
	
	echo $a;*/
	
	/*
	$myArr = Array('orange','banana','apple','test');
	
	//  $i=0;  $i<4; $i=$i+1;
	for($i=0; $i<count($myArr); $i++)
	{
		echo $myArr[$i]."<br>";
	}
	
	print_r($myArr);
	*/
	/*
	$assocArr = Array('orange'=>5, "banana"=>10, "apple"=>12, "pear"=>3);
	
	
	
	//$myArr = Array('orange','banana','apple','test');
	foreach($assocArr as $key=>$value)
	{
		//$key = 'orange'; $value=5;
		//$key = "banana"; $value=10;
		//$key = "apple"; $value=12;
		//$key = "pear"; $value=3;
		
		echo $key.": ".$value."<br>";
			
	}
	
	*/
	/*
	$y= array(
	
		0=> array("count"=>8),
		1=> array("count"=>5),
	);
	
	foreach($y as $key=>$val)
	{
		// 0  array('count'=>8)
		// 1  array('count'=>5)
		
		echo $val['count'];
	}
	
	
	*/
	
   $books = Array(
   
   		0=> Array(
			"description" => Array(
				'author'=>'Ivan Vazov',
				'title'=>'Pod Igoto',
				'year' =>'1888'
			),
			"quantity" =>5,
			"price" => 22.50
		),
		
		
		1=> Array(
			"description" => Array(
				'author'=>'G.R.R. Martin',
				'title'=>'A Song of Ice and Fire',
				'year' =>'1988'
			),
			"quantity" =>10,
			"price" => "42.50"
		)
   );
  
  
  
  	$books[2]['description']['author'] = 'Aleko';
	$books[2]['description']['title'] = '';
	$books[2]['description']['year'] = '';
	$books[2]['quantity'] = 10;
	$books[2]['price'] = 42.50;
	
	$books[3]['description']['author'] = 'Aleko';
	$books[3]['description']['title'] = '';
	$books[3]['description']['year'] = '';
	$books[3]['quantity'] = 10;
	$books[3]['price'] = 42.50;
	
	
   print_r($books);
  
   foreach($books as $k=>$v)
   {
   	   echo $v['description']['author']." has ".$v['description']['title'].": ".$v['quantity']." books in our store<br>";
   }
	
	//print_r($y);
?>

<form method='post'>
	
	<input name='testInput'>
	
	<input type='submit'>
	
</form>
</div>