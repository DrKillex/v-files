<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = ['IT', 'FR', 'EN', 'DE', 'ES', 'JP'];

        Schema::disableForeignKeyConstraints();
        Language::truncate();
        Schema::enableForeignKeyConstraints();


        foreach ($languages as $language) {

            $new_language = new Language();
            $new_language->name = $language;
            $new_language->slug = Str::slug($new_language->name);
            $new_language->save();

        }

    }
}

