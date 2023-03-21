<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Project::create([
            'judul' => 'School Profile Website (Laravel)',
            'link' => 'https://web-wikrama.akmalweb.my.id/',
            'gambar' => 'post-images/wikrama.png',
            'repo' => 'https://github.com/akmalmaulanabasri/website-smk-wikrama-bogor',
            'featured' => 1
        ]);
        Project::create([
            'judul' => 'Nft Platypusclubs Landing Page',
            'link' => 'https://platypusclubs.xyz',
            'gambar' => 'post-images/platypusclubs.png',
            'repo' => '#',
            'featured' => 1
        ]);
        Project::create(
        [
            'judul' => 'Personal Website 01',
            'link' => 'https://akmalmaulana.my.id/personal',
            'gambar' => 'post-images/portfolio1.png',
            'repo' => '#',
            'featured' => 0
        ]);
        Project::create(
        [
            'judul' => 'Personal Website 02',
            'link' => 'https://akmalmaulana.me/',
            'gambar' => 'post-images/portfolio2.png',
            'repo' => '#',
            'featured' => 0
        ]);
        Project::create(
        [
            'judul' => 'Personal Website 03',
            'link' => 'https://akmalmaulana.my.id/',
            'gambar' => 'post-images/portfolio3.png',
            'repo' => '#',
            'featured' => 0
        ]);
        Project::create(
        [
            'judul' => 'Gizi Sehat App',
            'link' => 'https://gizisehat.my.id/',
            'gambar' => 'post-images/gizisehat.png',
            'repo' => 'https://github.com/akmalmaulanabasri/gizisehat',
            'featured' => 1
        ]);
        Project::create(
        [
            'judul' => 'Aplikasi Absen Harian',
            'link' => 'https://akmalmaulana.my.id/tugas/absensi/',
            'gambar' => 'post-images/absensi.png',
            'repo' => '#',
            'featured' => 1
        ]);

        User::create([
            'name' => 'Akmal Maulana Basri',
            'email' => 'akmalmaulanabasri711@gmail.com',
            'username' => 'akmal',
            'password' => bcrypt('akmal190605'),
            'role' => 'admin'
        ]);
     
    }
}
