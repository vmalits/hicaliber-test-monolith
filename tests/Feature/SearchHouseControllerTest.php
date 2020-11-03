<?php
declare(strict_types=1);

namespace Tests\Feature;

use App\Models\House;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchHouseControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_house_resource_collection(): void
    {
        House::factory()->count(10)->create();
        $response = $this->getJson(route('search-houses'));
        $response->assertJsonStructure([
            'data' => [
                [
                    'name',
                    'bedrooms',
                    'bathrooms',
                    'storeys',
                    'garages',
                    'price',
                ]
            ]
        ]);
        $response->assertStatus(200);
    }
}
