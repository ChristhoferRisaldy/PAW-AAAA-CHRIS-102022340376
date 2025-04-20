<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // Set the timezone to Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        // Create variables: name, hour, time
        $name = 'Christhofer Risaldy Kobong'; // Replace with dynamic user name if available
        $hour = date('H');
        $time = date('H:i:s');

        // Determine $greeting based on the hour
        if ($hour >= 5 && $hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour >= 12 && $hour < 17) {
            $greeting = 'Good Afternoon';
        } elseif ($hour >= 17 && $hour < 21) {
            $greeting = 'Good Evening';
        } else {
            $greeting = 'Good Night';
        }

        // Call the getDate() function
        $date = $this->getDate();

        // Send data to the 'dashboard' view
        return view('dashboard', compact('name', 'greeting', 'time', 'date'));
    }

    private function getDate()
    {
        // ==================3==================
        // Return the current date in the format dd-mm-yyyy
        return date('d-m-Y');
    }
}