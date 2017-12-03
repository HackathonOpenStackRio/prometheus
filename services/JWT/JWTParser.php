<?php
namespace Services\JWT;
use Interfaces\ParserInterface;

abstract class JWTParser implements ParserInterface
{
    public static function encode($objectToEncode) : String
    {
        $jwt = serialize($objectToEncode);
        $jwt = encrypt($jwt);
        return $jwt;
    }
}