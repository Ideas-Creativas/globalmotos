<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class marcasTest extends TestCase
{
  use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetMarcas()
    {
        $response = $this->json('GET','/api/v1/marcas');

        $response->assertStatus(200)
                ->assertjsonStructure([
                  'id','image_url','marca'
                ]);

    }
}
