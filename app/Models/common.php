<?php

namespace App\Models;
use Illuminate\Http\Request;

class Common{
    //HTML特殊文字をエスケープ
    public static function h($str) {
        echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
}
