<?php

declare(strict_types=1);


namespace App\Dictionary;


enum ActionType: string
{
    case ATTACK = 'attack';
    case HEAVY = 'heavy';
    case HEAL = 'heal';
    case RUN = 'run';

}
