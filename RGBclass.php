<?php
class RGBcolor
{
private $Red;
private $Green;
Private $Blue;

public function __construct ($Red, $Green, $Blue){
    $this->SetRed($Red);
    $this->SetGreen($Green);
    $this->SetBlue($Blue);

}
public function GetColor()
{
    return "$this->Red".","."$this->Green".","."$this->Blue";
}

public function GetRed()
{
    return $this->Red;
}

    public function GetGreen()
    {
        return $this->Green;
    }

    public function GetBlue()
    {
        return $this->Blue;
    }


    private function SetRed($Red){
    if (is_int($Red)){
    if ($Red>=0  & $Red<=255 )

    {

           $this->Red = $Red;


        }
    else  throw new InvalidArgumentException('This  method only accepts integers. Input was: '.$Red);
    }
else  throw new InvalidArgumentException('This  method only accepts integers from 0 to 255. Input was: '.$Red);

}

private function SetGreen($Green){
    if (is_int($Green)){
    if ($Green>=0 & $Green<=255 )

    {
           $this->Green=$Green;

        }
    else  throw new InvalidArgumentException('This  method only accepts integers. Input was: '.$Green);
    }
else  throw new InvalidArgumentException('This  method only accepts integers from 0 to 255. Input was: '.$Green);

}

    private function SetBlue($Blue){
        if (is_int($Blue)){
            if ($Blue>=0 &$Blue<=255 )

            {
                $this->Blue=$Blue;

            }
            else  throw new InvalidArgumentException('This  method only accepts integers. Input was: '.$Blue);
        }
        else  throw new InvalidArgumentException('This  method only accepts integers from 0 to 255. Input was: '.$Blue);

    }


    public function Mixer(RGBcolor $color)
    {


    return new RGBcolor(($this->Red+$color->Red)/2, ($this->Green+$color->Green)/2,($this->Blue+$color->Blue)/2);



    }

public function Equals(RGBcolor $color)
{
    if ($this->Red == $color->Red & $this->Green == $color->Green & $this->Blue == $color->Blue) {
        return true;
    } else {
        return folse;}
}
public static function RandomColor(){
return new RGBcolor(random_int(0,255),random_int(0,255),random_int(0,255));


}
}



/*
$Color = new RGBcolor(220,15,44);

echo $Color->GetColor();
echo "<br>";

var_dump($Color);
$color_Rand=RGBcolor::RandomColor();
var_dump($color_Rand);
echo "<br>".$color_Rand->GetColor();
*/

echo RGBcolor::RandomColor()->GetColor();

?>

