<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <center>
    <h1>
      <?php include("variables.php") ?> 
	  <?php 
	  // echo "Hello World!"; 
        //$first_name = "Bill";

		//$last_names = array("Elder", "Smith", "Dunlap");
		$first_names = array("John", "Steve", "Dunlap", "Jones", "Geore");
		//echo $first_names[2][2];

		//$last_name = "Dunlap";
        //$favorite_number = 59;

		// Arrays - Associative
		$fav_pizza = array(
			"John" => "Pepporoni",
			"Steve" => "cheese",
			"Mary" => "Mushroom"
			);
		echo count($fav_pizza);
		echo "<br/>";
		echo $fav_pizza["Mary"];
		echo "<br/>";
		echo count($first_names);
		echo "<br/>";
		//echo "The last name is: " . $first_names[count($first_names) - 1];    //Last name in the array
		echo "<br/>";

		// Loops -- While
		//while (condition is true) {
		//	Do something;
		//}
        /* $counter = 0;
		while ($counter < 5) {
				echo "The count is: $counter and name is $first_names[$counter]<br/>";
				$counter++;
		}*/
		
	
		// Loops -- For
		/*
		echo "<br/>";
		for ($count = 0; $count <= 10; $count++) {
			echo "The count is $count <br/>";
		} */
		
		// Loops -- Foreach
		$names = array("John", "Steve", "Dunlap", "Jones", "Geore");
		/*foreach ($names as $n) {
			echo "$n<br/>";
		}*/
		
		// Loop thru names using while
		/* $count = 0;
			while ($count < count($names)) {
				echo "Name: $names[$count] - ($count)<br/>";
				$count++;
			} */
			
		// Functions
			/*function helloThere($num_1, $num_2) {
				return $num_1 + $num_2;
			}
			
			$answer = helloThere(49, 1);
			echo $answer * 1.1;
			*/
			
			// echo mt_rand(0,100);  // Better than just rand()
			/* $num = 1;
			$rando = mt_rand(0,4);
			echo $names[$rando] . " " . $rando;
			if ($num == $rando) {
				echo "<br/>YOU WIN! $num = $rando";
			} else {
				echo "<br/>You LOSE! $num doesn't equal $rando";
			}  */
	
		// Date function
		
		echo date('l jS \of F, Y') . "<br/>";
		echo "<br/>";
		echo "<br/>";
		
		// String manipulation
		
		/*echo "<br/>";
		$stuff = "john elder";
		echo strtoupper($stuff);
		//echo str_replace("Monster", "Dork", $stuff);
		echo "<br/>";
		echo ucwords($stuff);  //like proper in Python
		*/
		
		// Include function
		echo "Copyright (c) " . $company_name . " " . date("Y") . " - All Rights Reserved";
		echo "<br/>";
		echo "<br/>";
		
		
    /*    if ($first_name == "Dave") {
				echo "Hi Dave!";	
		} elseif ($first_name == "George") {
			echo "Hi George!";
		}		
		else {
			echo "You're not Dave or George!  Who are you?";
		}
	*/	
		// Math stuff
        // + - * / % **   
        $num_1 = 41;
        $num_2 = 4;
        echo "<br/>";
        //var_dump($num_2 > $num_1);
		
		//echo "And then she said: \"YOU'RE UGLY!\"";
		echo "<br/>";
		//echo 'And then she said: "YOU\'RE UGLY!"';
		
      ?>  
    </h1>
    <br>
      <h3><?php
           //echo $first_name . " " . $last_name . " " . $favorite_number;
          ?>
    </h3>
    <br>
    </center>
    <br>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>