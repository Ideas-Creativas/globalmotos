<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Banners;

class BannersTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * @test
     */
    public function banners_store()
    {
        $user = create('App\User');

        $data = [
            'image_url'=> $this->faker->imageUrl($width = 640, $height = 480),
            'link'=> $this->faker->url(),
            'start'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'end'=> $this->faker->date($format = 'Y-m-d', $max = 'now + 1 month'),
            'user_id'=> $user->id
        ];

        $response = $this->json('POST',$this->baseUrl . "banners", $data);

        $response->assertStatus(201);

        $this->assertDatabasehas('banners',$data);

        $banners = Banners::all()->first();

        $response->assertJson([
            'data' => [
                'id' => $banners->id,
                'image_url' => $banners->image_url,
                'link' => $banners->link
            ]
        ]);
    }
}
