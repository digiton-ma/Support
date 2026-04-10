<?php

declare(strict_types=1);

namespace Digitonma\Support\Tests\Http;

use Digitonma\Support\Tests\Stubs\FormRequestController;
use Digitonma\Support\Tests\TestCase;
use Illuminate\Routing\Router;

/**
 * Class     FormRequestTest
 *
 * @author   Digitonma <contact@digiton.ma>
 */
class FormRequestTest extends TestCase
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    protected function setUp(): void
    {
        parent::setUp();

        $this->setupRoutes($this->app['router']);
    }

    /* -----------------------------------------------------------------
     |  Tests
     | -----------------------------------------------------------------
     */

    /** @test */
    public function it_can_check_validation(): void
    {
        $this->post('form-request')
             ->assertStatus(302)
             ->assertRedirect('/');

        $response = $this->post('form-request', [
            'name'  => 'DIGITONMA',
            'email' => 'digitonma@example.com',
        ]);

        $response
            ->assertSuccessful()
            ->assertJson([
                'name'  => 'DIGITONMA',
                'email' => 'digitonma@example.com',
            ]);
    }

    /** @test */
    public function it_can_sanitize(): void
    {
        $response = $this->post('form-request', [
            'name'  => 'digitonma',
            'email' => ' DIGITONMA@example.COM ',
        ]);

        $response
            ->assertSuccessful()
            ->assertJson([
                'name'  => 'DIGITONMA',
                'email' => 'digitonma@example.com',
            ]);
    }

    /* -----------------------------------------------------------------
     |  Other Methods
     | -----------------------------------------------------------------
     */

    /**
     * Setup the routes.
     *
     * @param  \Illuminate\Routing\Router  $router
     */
    private function setupRoutes(Router $router): void
    {
        $router->post('form-request', [FormRequestController::class, 'form'])
               ->name('form-request');
    }
}
