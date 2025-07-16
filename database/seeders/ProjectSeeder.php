<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Personal Portfolio',
            'slug' => 'personal-portfolio',
            'description' => 'A modern portfolio built using Laravel and Tailwind CSS.',
            'thumbnail' => '/images/portfolio.png',
            'tech_stack' => 'Laravel, Tailwind CSS',
            'github_link' => 'https://github.com/username/portfolio',
            'live_link' => 'https://mukarramali.net',
        ]);
    }
}
