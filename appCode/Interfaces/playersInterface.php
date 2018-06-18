<?php

namespace excercise\Interfaces;

interface playersInterface
{
    function readPlayers($source, $filename = null);
    function writePlayer($source, $player, $filename = null);

}