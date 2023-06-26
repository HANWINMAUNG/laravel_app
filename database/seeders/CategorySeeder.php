<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'han win maung',
            'slug'=> Str::slug('lewis author')
        ]);

        Category::create([
            'name'=>'Ko TarYar',
            'slug'=> Str::slug('lewis author')
        ]);
    }
}
