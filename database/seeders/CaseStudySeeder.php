<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseStudy::create([
            'title' => 'SEO Optimization Case Study',
            'slug' => 'seo-case-study',
            'summary' => 'How I improved organic traffic for a WordPress website by 200%.',
            'content' => 'Detailed steps on keyword strategy, on-page SEO, and performance improvements.',
            'thumbnail' => '/images/seo-case.png',
            'tech_stack' => 'WordPress, Google Analytics, Ahrefs',
        ]);
    }
}
