<?php
namespace Interfaces;

interface ParserInterface
{
    public static function encode($objectToEncode) : ParserInterface;
    public static function decode(ParserInterface $parserInterface);
}