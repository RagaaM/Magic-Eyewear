<?php

function redirectURL($page)
{
    header('Location: '.URLROOT.'/'.$page);
}

?>