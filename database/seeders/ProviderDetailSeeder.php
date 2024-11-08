<?php

namespace Database\Seeders;

use App\Models\ProviderDetail;
use Illuminate\Database\Seeder;

class ProviderDetailSeeder extends Seeder
{
    public function run()
    {
        $providerDetails = [
            [
                'user_id' => 1, // Burada 1'in gerçekten users tablosunda olduğunu kontrol edin
                'specialty' => 'Dahiliye Uzmanı',
                'service_details' => 'Dahiliye Uzmanlığı hizmeti hakkında detaylı bilgiler',
                'work_hours' => '08:00 - 17:00',
            ],
            [
                'user_id' => 2, // Aynı şekilde, 2'yi de users tablosunda doğrulayın
                'specialty' => 'Psikolog',
                'service_details' => 'Psikolojik destek hizmeti hakkında detaylı bilgiler',
                'work_hours' => '10:00 - 18:00',
            ],
            [
                'user_id' => 3,
                'specialty' => 'Fizyoterapist',
                'service_details' => 'Fizyoterapi hizmeti hakkında detaylı bilgiler',
                'work_hours' => '08:30 - 16:30',
            ],
            [
                'user_id' => 4,
                'specialty' => 'Diyetisyen',
                'service_details' => 'Diyetisyenlik hizmeti hakkında detaylı bilgiler',
                'work_hours' => '11:00 - 19:00',
            ],
            [
                'user_id' => 5,
                'specialty' => 'Kardiyolog',
                'service_details' => 'Kardiyoloji hizmeti hakkında detaylı bilgiler',
                'work_hours' => '09:00 - 20:00',
            ],
        ];

        foreach ($providerDetails as $detail) {
            ProviderDetail::create($detail);
        }
    }

}
