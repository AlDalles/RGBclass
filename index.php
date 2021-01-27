<?php
class RGBcolor
{
private $Red;
private $Green;
Private $Blue;

private function __construct ($Red, $Green, $Blue){
    $this->Red = $this->SetRed($Red);
    $this->Green = $this->SetGreen($Green);
    $this->Blue = $this->SetRed($Blue);

}

private function SetRed($Red){
    if (is_int($Red)){
    if ($Red>=0 &$Red<=255 )

    {
           $this->Red=$Red;

        }
    else  throw new InvalidArgumentException('This  method only accepts integers. Input was: '.$Red);
    }
else  throw new InvalidArgumentException('This  method only accepts integers from 0 to 255. Input was: '.$Red);

}

private function SetGreen($Green){
    if (is_int($Green)){
    if ($Green>=0 &$Green<=255 )

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




}





?>

