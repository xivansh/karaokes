<?php

namespace Database\Seeders;

Use App\Models\Karaoke;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaraokeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => 'ekspe.png', 
                'name' => 'VIP', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
            [
                'image' => 'ekspe.png', 
                'name' => 'REGULER', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
            [
                'image' => 'ekspe.png', 
                'name' => 'REGULER 2', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
            [
                'image' => 'ekspe.png', 
                'name' => 'REGULER 3', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
            [
                'image' => 'ekspe.png', 
                'name' => 'REGULER 4', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
            [
                'image' => 'ekspe.png', 
                'name' => 'REGULER 5', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
            [
                'image' => 'ekspe.png', 
                'name' => 'LUMAYAN', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
            [
                'image' => 'ekspe.png', 
                'name' => 'LUMAYAN 1', 
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti enim, esse sequi eaque corporis 
                           labore unde laudantium necessitatibus aliquid modi aperiam error atque ipsum alias.'
            ],
        ];


        foreach ($data as $r) {
            $ex = Karaoke::where('name', $r['name'])->first();
            if(!$ex) { $ex = new Karaoke; }

            $ex->image = $r['image'];
            $ex->name = $r['name'];
            $ex->desc = $r['desc'];
            $ex->save();
        }
    }
}
