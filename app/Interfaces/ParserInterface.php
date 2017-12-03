<?php
namespace Interfaces;

interface ParserInterface
{
    public static function encode($objectToEncode) : Interger;
    public static function decode(ParserInterface $parserInterface) : ParseInterface;
}