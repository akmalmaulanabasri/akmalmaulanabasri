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
            'gambar' => 'https://ibb.co/VLLyGzN',
            'repo' => 'https://github.com/akmalmaulanabasri/website-smk-wikrama-bogor',
            'featured' => 1
        ]);
        Project::create([
            'judul' => 'Nft Platypusclubs Landing Page',
            'link' => 'https://platypusclubs.xyz',
            'gambar' => 'https://ibb.co/k8xvLYW',
            'repo' => '#',
            'featured' => 1
        ]);
        Project::create(
        [
            'judul' => 'Personal Website 01',
            'link' => 'https://akmalmaulana.my.id/personal',
            'gambar' => 'https://ibb.co/fYprH0d',
            'repo' => '#',
            'featured' => 0
        ]);
        Project::create(
        [
            'judul' => 'Personal Website 02',
            'link' => 'https://akmalmaulana.me/',
            'gambar' => 'https://ibb.co/N1Xf9gh',
            'repo' => '#',
            'featured' => 0
        ]);
        Project::create(
        [
            'judul' => 'Personal Website 03',
            'link' => 'https://akmalmaulana.my.id/',
            'gambar' => 'https://ibb.co/J5zypWr',
            'repo' => '#',
            'featured' => 0
        ]);
        Project::create(
        [
            'judul' => 'Gizi Sehat App',
            'link' => 'https://gizisehat.my.id/',
            'gambar' => 'https://ibb.co/SwsBv79',
            'repo' => 'https://github.com/akmalmaulanabasri/gizisehat',
            'featured' => 1
        ]);
        Project::create(
        [
            'judul' => 'Aplikasi Absen Harian',
            'link' => 'https://akmalmaulana.my.id/tugas/absensi/',
            'gambar' => 'https://ibb.co/SwsBv79',
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
