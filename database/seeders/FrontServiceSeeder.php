<?php

namespace Database\Seeders;

use App\Models\FrontService;
use Illuminate\Database\Seeder;

class FrontServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service1 = FrontService::create([
            'name' => 'Cardiology',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service1->addMedia(public_path('web_front/images/services/cardiology.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));

        $service2 = FrontService::create([
            'name' => 'Orthopedics',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service2->addMedia(public_path('web_front/images/services/orthopedics.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));

        $service3 = FrontService::create([
            'name' => 'Pulmonology',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service3->addMedia(public_path('web_front/images/services/pulmonology.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));

        $service4 = FrontService::create([
            'name' => 'Dental Care',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service4->addMedia(public_path('web_front/images/services/dental-care.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));

        $service5 = FrontService::create([
            'name' => 'Medicine',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service5->addMedia(public_path('web_front/images/services/medicine.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));

        $service6 = FrontService::create([
            'name' => 'Ambulance',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service6->addMedia(public_path('web_front/images/services/ambulance.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));

        $service7 = FrontService::create([
            'name' => 'Ophthalmology',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service7->addMedia(public_path('web_front/images/services/ophthalmology.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));

        $service8 = FrontService::create([
            'name' => 'Neurology',
            'short_description' => 'image Cardiology Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.',
        ]);
        $service8->addMedia(public_path('web_front/images/services/neurology.png'))->toMediaCollection(FrontService::PATH,
            config('app.media_disc'));
    }
}
