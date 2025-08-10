<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class cvGenerationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_cv_generations(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Download CV');
    }

    public function test_cv_download(): void
    {
        $response = $this->get('/cv/download');
        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
        $response->assertHeader('Content-Disposition', 'attachment; filename="cv.pdf"');
    }
}
