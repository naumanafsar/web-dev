<?php
  # Arrays

  /*
    - Indexed
    - Associative
    - Multidimensional
  */

  // Indexed

  $people = array('Elliot', 'Mr Robot', 'Darlene');
  // echo $people[0];

  $ids = array(21, 22, 23);
  // echo $ids[1];

  $bikes = ['Honda' , 'Honda 70', 'Yamaha'];
  $bikes[3] = 'Honda 125';
  $bikes[] = 'IDK';   //Add to the last index
  // echo $bikes[4];
  // echo count($bikes);
  // print_r($bikes);
  // var_dump($bikes);


  # Associative Arrays

  $people = ['Elliot' => 25, 'Mr Robot' => 42, 'Darlene' => 22];
  // echo $people['Elliot'];

  $ages = [25 => 'Elliot', 42 => 'Mr Robot', 22 => 'Darlene'];

  $people['Mobley'] = 32;

  // echo $people['Mobley'];
  // print_r($people);
  // var_dump($people);
  // echo $ages[25];

  # Multi-Dimensional Array

  $cars =array(
      array('Honda', 20, 12 ),  //Comma Separated!
      array('Yamaha', 22, 15 ),
      array('ZXMCO', 30, 22 )
  );

  // echo $cars[0][1];

?>
