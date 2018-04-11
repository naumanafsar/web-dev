<?php
  # Loops

  /*
    - For
    - While
    - Do..While
    - ForEach
  */


    # For Loop
    for($i = 0; $i < 10; $i++) {
    	echo $i;
    	echo '<br>';
    }

    # While Loop
    
    $i = 0;
    while($i < 10) {
    	echo $i;
    	echo '<br>';
    	$i++;
    }

    # DO While

    $i = 0;
    do{
    	echo $i;
        echo '<br>';
        $i++;
    }

    while($i <= 10);

    # For Each

    $people =  array('Elliot', 'Mr Robot', 'Darlene');

    foreach($people as $person) {
    	echo $person;
    	echo '<br>';
    }

?>
