<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'app_name' => 'Bitcoin Financial Company',
            'email' => 'support@bit-fin.co',
            'youtube_video' => 'https://www.youtube.com/embed/WrgwWDszPMs?autoplay=1',
            'currency' => '$',
            'referral_worth' => 50,
            'withdrawal_charge' => 0,
            'min_investment' => 100,
            'min_withdrawal' => 20,
        ];
    }
}
