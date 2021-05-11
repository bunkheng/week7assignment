<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Task 1


//For advantage: 

// Class Pavan
class Pavan
{
    public function sayHello()
    {
        echo "Hey Hello";
    }
}
// Trait for pavan
trait forPavan
{
    public function sayfor()
    {
        echo " Pavan ";
    }
}
class Sample extends Pavan
{
    use forPavan;
    public function pavanForBunkheng()
    {
        echo "pavan for Bunkheng";
    }
}
$test = new Sample();
$test->sayHello();
$test->sayfor();
$test->pavanForBunkheng();


//---------------------------
echo "<br>";
echo "<br>";


// Task 2



class Banks
{
    // Properties
    public $data;

    // Methods
    public function set_data($data)
     {
         $this->data = $data;
     }
    public function get_abaSales()
    {
        $this->data;        
        $saleABA = 0;
        for($x=0; $x<count($this->data); $x++){
    		if($this->data[$x][2] == "ABA"){
        		$saleABA += $this->data[$x][3];
    		}
		}
        return $saleABA;
    
    }
    public function get_wingSales()
    {
        $this->data;        
        $saleWing = 0;
        for($x=0; $x<count($this->data); $x++){
    		if($this->data[$x][2] == "Wing"){
        		$saleWing += $this->data[$x][3];
    		}
		}
        return $saleWing;
    
    }
    public function get_pipaySales()
    {
        $this->data;        
        $salePipay = 0;
        for($x=0; $x<count($this->data); $x++){
    		if($this->data[$x][2] == "PiPay"){
        		$salePipay += $this->data[$x][3];
    		}
		}
        return $salePipay;
    
    }
    public function displayBigOrder()
    {
    	$this->data;
		echo "*Item Price Quantity Method Total" . "<br>";	    	
        for ($x=100; $x>0; $x--){
        	for ($y=0; $y<count($this->data); $y++){
            	if ($this->data[$y][3] == $x){
            	echo $this->data[$y][4] . " \ " . $this->data[$y][0] . " \ " .
                 $this->data[$y][1] . " \ " . $this->data[$y][2] . " \ " . $this->data[$y][3] . "<br>";
                }
            }
        }
    }
}
$item = new Banks();
$item->set_data(array(array($price = 5, $quantity = 1, $name = "ABA", $total = 5, $number = "item1"),
    array($price = 3, $quantity = 2, $name = "Wing", $total = 6, $number = "item2"),
    array($price = 4, $quantity = 1, $name = "ABA", $total = 4, $number = "item3"),
    array($price = 5, $quantity = 1, $name = "ABA", $total = 5, $number = "item4"),
    array($price = 6, $quantity = 1, $name = "PiPay", $total = 6, $number = "item5"),
    array($price = 10, $quantity = 1, $name = "ABA", $total = 10, $number = "item6"),
    array($price = 15, $quantity = 1, $name = "Wing", $total = 15, $number = "item7"),
    array($price = 2, $quantity = 1, $name = "Wing", $total = 2, $number = "item8")));
    
echo "Number of sales by ABA method is ";
echo $item->get_abaSales() . ".";
echo "<br>";
echo "Number of sales by PiPay and Wing method is ";
echo ($item->get_wingSales()) + ($item->get_pipaySales()) . ".";
echo "<br>";
echo "All sales ordering by biggest total amount: " . "<br>";
echo $item-> displayBigOrder();



?>




</body>
</html>