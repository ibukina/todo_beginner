<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;
use App\Models\Category;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category->todos()->create([
            'category_id'=>$categories[array_rand($categories)],
            'content'=>'test',
        ]);
    }
}
