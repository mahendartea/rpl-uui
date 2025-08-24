<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        // Check if user has any of the required roles
        foreach ($roles as $role) {
            if ($user->hasRole($role)) {
                return $next($request);
            }
        }

        // If user doesn't have required role, redirect based on their actual role
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        } elseif ($user->hasRole('assessor')) {
            return redirect()->route('assessor.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        } elseif ($user->hasRole('applicant')) {
            return redirect()->route('applicant.dashboard')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }

        // If no role assigned, logout and redirect to home
        auth()->logout();
        return redirect()->route('home')->with('error', 'Akun Anda belum memiliki role yang valid.');
    }
}
