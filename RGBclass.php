<?php

class RGBcolor
{
    private $Red;
    private $Green;
    private $Blue;

    public function __construct($Red, $Green, $Blue)
    {
        $this->setRed($Red);
        $this->setGreen($Green);
        $this->setBlue($Blue);

    }

    public function getColor()
    {
        return "$this->Red" . "," . "$this->Green" . "," . "$this->Blue";
    }

    public function getRed()
    {
        return $this->Red;
    }

    public function getGreen()
    {
        return $this->Green;
    }

    public function getBlue()
    {
        return $this->Blue;
    }


    private function setRed($Red)
    {
        if (is_int($Red)) {
            if ($Red >= 0 & $Red <= 255) {

                $this->Red = $Red;


            } else  throw new InvalidArgumentException('This  method only accepts integers. Input was: ' . $Red);
        } else  throw new InvalidArgumentException('This  method only accepts integers from 0 to 255. Input was: ' . $Red);

    }

    private function setGreen($Green)
    {
        if (is_int($Green)) {
            if ($Green >= 0 & $Green <= 255) {
                $this->Green = $Green;

            } else  throw new InvalidArgumentException('This  method only accepts integers. Input was: ' . $Green);
        } else  throw new InvalidArgumentException('This  method only accepts integers from 0 to 255. Input was: ' . $Green);

    }

    private function setBlue($Blue)
    {
        if (is_int($Blue)) {
            if ($Blue >= 0 & $Blue <= 255) {
                $this->Blue = $Blue;

            } else  throw new InvalidArgumentException('This  method only accepts integers. Input was: ' . $Blue);
        } else  throw new InvalidArgumentException('This  method only accepts integers from 0 to 255. Input was: ' . $Blue);

    }


    public function mixer(RGBcolor $color)
    {


        return new RGBcolor(intdiv(($this->Red + $color->Red), 2), intdiv(($this->Green + $color->Green), 2), intdiv(($this->Blue + $color->Blue), 2));


    }

    public function equals(RGBcolor $color)
    {
        if ($this->Red == $color->Red && $this->Green == $color->Green && $this->Blue == $color->Blue) {
            return true;
        } else {
            return false;
        }
    }

    public static function randomColor()
    {
        return new RGBcolor(random_int(0, 255), random_int(0, 255), random_int(0, 255));


    }
}


echo RGBcolor::randomColor()->getColor();

?>





