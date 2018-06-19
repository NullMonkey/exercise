<?php


namespace excercise\Interfaces;


interface IReadWritePlayers
{
    function readPlayers($source, $filename = null);
    function writePlayer($source, $player, $filename = null);
}