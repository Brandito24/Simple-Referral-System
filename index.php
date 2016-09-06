<?php
/**
 * Created by PhpStorm.
 * User: Lukafurlan
 * Date: 9/6/2016
 * Time: 8:33 PM
 */

if(isset($_GET['ref']))
{
    require_once("class/ReferralHandler.class.php");
    $refferal = new ReferralHandler();
    $refferal->addReferral($_GET['ref']);
}