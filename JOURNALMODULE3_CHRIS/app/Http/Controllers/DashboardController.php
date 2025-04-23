<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $name = "EAD Students";
        $hour = date('H');
        $time = date('H:i:s');
        $date = $this->getDate();

        $greeting = match (true) {
            $hour >= 5 && $hour < 12 => 'Good Morning',
            $hour >= 12 && $hour < 15 => 'Good Afternoon',
            $hour >= 15 && $hour < 18 => 'Good Evening',
            default => 'Good Evening',
        };

        return view('dashboard', compact('name', 'greeting', 'time', 'date'));
    }

    private function getDate()
    {
        return date('d-m-Y');
    }
}
