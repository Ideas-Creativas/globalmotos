<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Motos;
use App\Marcas;
use App\Banners;

class motosTest extends TestCase
{
  use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetMotos()
    {


      $response = $this->json('GET','/api/v1/motos');

      $response->assertStatus(200)
              ->assertjsonStructure([
                'id','umage_url','description'=>[
                    'cilindrada','precio','disponible','dimensiones','peso','potencia','neumaticos'
                  ]
              ]);
    }

    /**
     * @test
     */

     public function deletes_post()
     {
        create('App\User');
        $mot = create('App\Motos');
        
        $this->json('DELETE', $this->baseUrl . "posts/{ $mot->id }")
        ->assertStatus(204);

        $this->assertNull( Motos::find($mot->id) );
     }
}
