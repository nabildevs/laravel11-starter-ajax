<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::firstOrCreate([
            'business_email' => 'support@business.com'
        ], [
            'business_name'    => 'Business',
            'business_address' => 'Jakarta, ID',
            'business_phone'   => '+62 9876 54321'
        ]);
    }
}
