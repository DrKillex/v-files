<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DeveloperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::truncate();
        $name=['Variant','Moburst','Clay','SmartSites','PurpleFire','Neuron','Clever Code Lab','Konstant Infosolutions'];
        foreach($name as $item){
            $developer=new Developer();
            $developer->name=$item;
            $developer->save();
        }
    }
}
