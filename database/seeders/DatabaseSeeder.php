<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Doctor;
use App\Models\Resservations;
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
            'doctor_name' => 'سعد شاهين',
            'doctor_address1' => 'العباسية',
            'doctor_address2' => 'العباسية- خلف نادي الأطباء - يقرب مجمع ميديكا الطبي',
            'specialize' => 'الباطنية والصدرية والقلبية',
            'doctor_phone_number' => '7722404015',
            'note' => 'الاستفسار(8صباحا-1ظهرا)',
        ]);


        Doctor::factory()->create([
            'doctor_name' => ' فاتح عبدالصاحب الخاقني',
            'doctor_address1' => 'بريهة',
            'doctor_address2' => 'بريهة-قرب حسينية اولاد عامر-مجمع النخبة الطبي',
            'specialize' => 'الباطنية والصدرية والقلبية',
            'doctor_phone_number' => '7714423733',
            'note' => 'الرقم للاستفسار فقط...الخميس عطلة العيادة',
        ]);

        Doctor::factory()->create([
            'doctor_name' => ' علي رحيم هاشم',
            'doctor_address1' => 'العشار',
            'doctor_address2' => 'العشار - مجمع الفرقدين - شارع الوطن',
            'specialize' => 'الباطنية والصدرية والقلبية',
            'doctor_phone_number' => '7702710980',
            'note' => 'يداوم في مستشفى البصرة (الجمهوري)التعليمي',
        ]);

        Resservations::factory()->create([
            'pationt_name' => 'ahmed',
            'p_number' => '0777193772',
            'p_email' => 'ahmed@ahmed.com',
            'p_case' => 'stomach hurat',
            'request_case',
            'reservation_time' => now()
        ]);
    }
}
