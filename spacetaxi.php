<?php

class Taxikosten {
    public $kilometers;
    public $begintijd;
    public $eindtijd;
    public $datum;
    public $voertuig;
    public $rit;
    public $day;
    public $tax;
    function taxiduur() {
        return "Space Minutos: " . $this ->eindtijd - $this ->begintijd . " Space Minutes Wooohooo! <br><br>";
    }
    function tijd() {
        return "Space Time Boogie: " .  $this ->begintijd . "-" . $this -> eindtijd . " Kablaaam!" . "\n" . "<br> Spacedate: " . $this -> datum;
    }
    function rittrip() {
        return $this -> rit . " of Boogiewoogie Space Taxi Woooby. <br><br>";
    }
    function regularPrice() {
        return "<br>" . "Regular Price Be: " . (($this -> kilometers * 4) + (($this -> eindtijd - $this -> begintijd)*1)) . " Space Dollas";      
    }
    function spaceTax(){
            return 1;
    }
    function totalPrice(){
        return "<br>You be paying a total of: " . (($this -> kilometers * 4) + (($this -> eindtijd - $this -> begintijd)*1)) * $this -> tax . " Space Dollas, I hope you are happy with yourself, goodbye."; 
    }
    function incomeTaxiDay(){
        return $this -> rittrip() . (($this -> kilometers * 4) + (($this -> eindtijd - $this -> begintijd)*1)) * $this -> tax . " Space Dollas. <br><br>"; 
    }
    function incomeTaxiDayDolla(){
        return (($this -> kilometers * 4) + (($this -> eindtijd - $this -> begintijd)*1)) * $this -> tax; 
    }  
}

echo "<h2>Space Taxi</h2>";
echo "<h3>We be trippin big time mon, betta fasten yr spacebelt!</h3>";
echo "<h3>4 space dollas for each spacemile driven, 1 space dolla extra for each spaceminute, you be paying 50% extra on Boogie Tuesday and Boogie Thursday and a Wopping 200% extra on the Celebration Day of our Beloved King!</h3>";
echo "<h4>Want special service? you be paying 500% extra for that! (this be very quick, you be surprised, hope you are ready!)</h4>";
echo "<h4>You make taxi dirty, you pay 75 space dollas extra mon!</h4>";
echo "<br>";
// 15:40 - 18:20
$rit1 = new Taxikosten();
$rit1 -> rit = "Trip 1";
$rit1 -> eindtijd = ((17*100)+20); 
$rit1 -> begintijd = ((15*100)+40);
$rit1 -> datum = "Boogie Monday the 1st of Buni";
$rit1 -> kilometers = 108; 
$rit1 -> tax = 1;
echo $rit1 -> rittrip();
echo $rit1 -> taxiduur();
echo $rit1 -> tijd();
echo $rit1 -> regularPrice();
echo $rit1 -> totalPrice();
// 9:30 - 11:20
$rit2 = new Taxikosten();
$rit2 -> rit = "Trip 2";
$rit2 -> eindtijd = ((11*100)+20); 
$rit2 -> begintijd = ((9*100)+30);
$rit2 -> datum = "Boogie Tuesday the 2nd of Buni";
$rit2 -> kilometers = 178; 
$rit2 -> tax = 1.5;
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo $rit2 -> rittrip();
echo $rit2 -> taxiduur();
echo $rit2 -> tijd();
echo $rit2 -> regularPrice();
echo $rit2 -> totalPrice();
// 12:20 - 13:50
$rit3 = new Taxikosten();
$rit3 -> rit = "Trip 3";
$rit3 -> eindtijd = ((13*100)+50); 
$rit3 -> begintijd = ((12*100)+20);
$rit3 -> datum = "Boogie Wednesday the 3rd of Buni";
$rit3 -> kilometers = 245; 
$rit3 -> tax = 1;
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo $rit3 -> rittrip();
echo $rit3 -> taxiduur();
echo $rit3 -> tijd();
echo $rit3 -> regularPrice();
echo $rit3 -> totalPrice();
// 8:00 - 14:30
$rit4 = new Taxikosten();
$rit4 -> rit = "Trip 4";
$rit4 -> eindtijd = ((14*100)+30); 
$rit4 -> begintijd = ((8*100)+0);
$rit4 -> datum = "Boogie Thursday the 4rd of Buni";
$rit4 -> kilometers = 523; 
$rit4 -> tax = 1.5;
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo $rit4 -> rittrip();
echo $rit4 -> taxiduur();
echo $rit4 -> tijd();
echo $rit4 -> regularPrice();
echo $rit4 -> totalPrice();
// 20:30 - 23:50
$rit5 = new Taxikosten();
$rit5 -> rit = "Trip 5";
$rit5 -> eindtijd = ((23*100)+50); 
$rit5 -> begintijd = ((20*100)+30);
$rit5 -> kilometers = 285607;
$rit5 -> datum = "Boogie Friday the 5th of Buni, Celebration Day of King Booogiee Woogie the XIV";
$rit5 -> tax = 5;
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo $rit5 -> rittrip();
echo $rit5 -> taxiduur();
echo $rit5 -> tijd();
echo $rit5 -> regularPrice();
echo $rit5 -> totalPrice();
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo "<h2>Income Statement of the 1st week of Buni of the year 7845.</h2>";
echo $rit1 -> incomeTaxiDay();
echo $rit2 -> incomeTaxiDay();
echo $rit3 -> incomeTaxiDay();
echo $rit4 -> incomeTaxiDay();
echo $rit5 -> incomeTaxiDay();
echo "Total Income of the 1st week of Buni be: " . $rit1 -> incomeTaxiDayDolla() + $rit2 -> incomeTaxiDayDolla() + $rit3 -> incomeTaxiDayDolla() + $rit4 -> incomeTaxiDayDolla() + $rit5 -> incomeTaxiDayDolla() . " Space Dollas.";
echo "<br><br>Average Space Miles Driven: " . ($rit1 -> kilometers + $rit2 -> kilometers + $rit3 -> kilometers + $rit4 -> kilometers + $rit5 -> kilometers)/5 . ".";
echo "<br><br> Longest Trip: " . max($rit1 -> kilometers, $rit2 -> kilometers, $rit3 -> kilometers, $rit4 -> kilometers, $rit5 -> kilometers) . " Space Miles.";