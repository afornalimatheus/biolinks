<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var User $user */
        $user = auth()->user();
        dd($user->links);
        return view('dashboard');
    }
}
