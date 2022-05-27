<?php

function getMaxLength($key)
{
    if ($key == 'idc') {
        return 9;
    } else if ($key == 'mobile' || $key == 'phone') {
        return 10;
    }
}
