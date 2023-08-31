<?php

namespace App\Enums;

enum Importance : string {

    case NORMAL = 'normal';
    case URGENT = 'urgent';
    case IMPORTANT = 'important';
}