<?php 
namespace App\helpers;
use App\Visitor as Visit;
class Visitor
{
    public static function Create()
    {
        $ip = request()->ip();
        $check = Visit::where('ip',$ip)->first();
        if ($check == null) {
            Visit::create([
                'ip' => $ip,
                'date' => date('d'),
                'month' => date('m'),
                'year' => date('Y')
            ]);          
        }
    }
}

