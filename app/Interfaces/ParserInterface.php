<?php
namespace Interfaces;

interface ParserInterface
{
    public static function encode($objectToEncode) : String;
    public static function decode(ParserInterface $parserInterface) : ParseInterface;
}