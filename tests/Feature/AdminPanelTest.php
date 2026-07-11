<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        config([
            'database.default' => 'sqlite',
            'database.connections.sqlite' => [
                'driver' => 'sqlite',
                'database' => ':memory:',
                'prefix' => '',
            ],
        ]);

        $this->artisan('migrate', ['--database' => 'sqlite']);
    }

    public function test_admin_dashboard_is_accessible(): void
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('Dashboard Admin Foodify');
    }

    public function test_admin_can_create_product(): void
    {
        $response = $this->post('/admin/products', [
            'nama_produk' => 'Nasi Goreng',
            'kategori' => 'Makanan Berat',
            'harga' => 25000,
            'deskripsi' => 'Lezat dan gurih',
        ]);

        $response->assertRedirect('/admin/products');
        $this->assertDatabaseHas('produk', ['nama_produk' => 'Nasi Goreng']);
    }

    public function test_portal_landing_page_shows_foodify_and_admin_choices(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Portal Foodify');
        $response->assertSee('Masuk ke Foodify');
        $response->assertSee('Masuk ke Admin');
    }
}
