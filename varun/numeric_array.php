<?php 
    //example of numeric array 
    $cars = array('Maruti','Rolls Royce','BMW','Tata','Toyota');
    $person[0] = "Varun Rajai";
    
    $person[2] = TRUE;
    $person[1] = 45;
    $person[3] = 56;
    $person[] = 'rajaivarun@gmail.com'; 
    $person[] = 'Gujarat'; 
    $person[10] = 'India';
    //display array 
    print_r($cars); //it will display whole array 
    print_r ("<hr/>");
    print_r($person);

    // change value in array
    $cars[0] = 'Mahindra';
    
    unset($cars[4]); // delete array

    echo "<hr/>";
    print_r($cars); //it will display whole array 
    $person[6] = 'Bhavnagar'; 
    echo "<hr/>";
    print_r($person);
?>