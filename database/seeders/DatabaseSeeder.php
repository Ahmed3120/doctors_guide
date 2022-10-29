<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Doctor::factory(10)->create();

        Doctor::factory()->create([
            'doctor_name' => 'سعد',
            'doctor_lastname' => 'شاهين',
            'doctor_address' => 'العباسية- خلف نادي الأطباء - يقرب مجمع ميديكا الطبي',
            'specialize' => 'الباطنية والصدرية والقلبية',
            'doctor_phone_number' => '7722404015',
            'note' => 'الاستفسار(8صباحا-1ظهرا)',
        ]);


        Doctor::factory()->create([
            'doctor_name' => 'فاتح',
            'doctor_lastname' => 'عبدالصاحب الخاقني',
            'doctor_address' => 'بريهة-قرب حسينية اولاد عامر-مجمع النخبة الطبي',
            'specialize' => 'الباطنية والصدرية والقلبية',
            'doctor_phone_number' => '7714423733',
            'note' => 'الرقم للاستفسار فقط...الخميس عطلة العيادة',
        ]);
    }
}
