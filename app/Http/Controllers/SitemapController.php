<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Base URL
        $baseUrl = url('/');

        // Define all pages with their details
        $pages = [
            [
                'url' => route('home'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '1.0'
            ],
            [
                'url' => route('about'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'url' => route('requirements'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'url' => route('contact'),
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
        ];

        // Add pages to sitemap
        foreach ($pages as $page) {
            $sitemap .= '  <url>' . "\n";
            $sitemap .= '    <loc>' . htmlspecialchars($page['url']) . '</loc>' . "\n";
            $sitemap .= '    <lastmod>' . $page['lastmod'] . '</lastmod>' . "\n";
            $sitemap .= '    <changefreq>' . $page['changefreq'] . '</changefreq>' . "\n";
            $sitemap .= '    <priority>' . $page['priority'] . '</priority>' . "\n";
            $sitemap .= '  </url>' . "\n";
        }

        $sitemap .= '</urlset>';

        return response($sitemap)
            ->header('Content-Type', 'application/xml');
    }

    public function robots()
    {
        $robots = "User-agent: *\n";
        $robots .= "Allow: /\n";
        $robots .= "Disallow: /admin\n";
        $robots .= "Disallow: /dashboard\n";
        $robots .= "Disallow: /login\n";
        $robots .= "Disallow: /register\n";
        $robots .= "\n";
        $robots .= "Sitemap: " . url('/sitemap.xml') . "\n";

        return response($robots)
            ->header('Content-Type', 'text/plain');
    }
}
