<?php

function getCentury($year) 
{
    return ceil($year / 100);
}

echo getCentury(2005);