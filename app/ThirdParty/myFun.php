<?php

namespace App\ThirdParty;



class myFun
{


    public static function formatDuit($param)
    {
        $formatnya = number_format($param, "0", ",", ".");
        return "Rp ." . $formatnya . ";-";
    }
}
