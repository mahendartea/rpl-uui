<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Redirect based on user role
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('assessor')) {
            return redirect()->route('assessor.dashboard');
        } elseif ($user->hasRole('applicant')) {
            return redirect()->route('applicant.dashboard');
        }

        // If no role assigned, assign applicant role by default
        $user->assignRole('applicant');
        return redirect()->route('applicant.dashboard');
    }
}
