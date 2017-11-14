<?php

namespace AppBundle\Service;


class SecurityService
{

    function createRoomCode(){
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < 6; $i++) {
            $token .= $codeAlphabet[random_int(0, $max-1)];
        }

        return $token;
    }

}