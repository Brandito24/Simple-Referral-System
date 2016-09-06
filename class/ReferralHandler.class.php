<?php
/**
 * Created by PhpStorm.
 * User: Lukafurlan
 * Date: 9/6/2016
 * Time: 8:34 PM
 */
class ReferralHandler {

    public function addReferral($name)
    {
        if(file_exists("referrals/".$name.".txt")) {
            $clicks = file_get_contents("referrals/".$name.".txt");
            $refferal = fopen("referrals/".$name.".txt", "w");
            fwrite($refferal, $clicks + 1);
            fclose($refferal);
        } else {
            $refferal = fopen("referrals/".$name.".txt", "w");
            fwrite($refferal, "1");
            fclose($refferal);
        }
    }

}