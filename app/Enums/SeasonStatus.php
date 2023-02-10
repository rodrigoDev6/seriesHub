<?php

namespace App\Enums;

enum SeasonStatus: string
{
    case START = 'S';
    case WATCHING = 'W';
    case FINISHED = 'F';
}