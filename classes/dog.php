<?php

class Dog extends Pet
{
    function fetch()
    {
        echo "<p>" . $this->name . "is fetching.</p>";
    }
}
// end of dog class