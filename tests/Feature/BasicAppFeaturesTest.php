<?php

namespace Tests\Feature;

use DeploymentInfo;
use Tests\TestCase;

/**
 * BasicAppFeatures class extends TestCase and provides test methods for testing different features of the application.
 */
class BasicAppFeaturesTest extends TestCase
{
    /**
     * Tests that the home page returns a successful response.
     */
    public function test_the_home_page_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test that the about page returns a successful response.
     */
    public function test_the_about_page_returns_a_successful_response(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    /**
     * Test that the work page returns a successful response.
     */
    public function test_the_work_page_returns_a_successful_response(): void
    {
        $response = $this->get('/work');

        $response->assertStatus(200);
    }

    /**
     * Test that the contact page returns a successful response.
     */
    public function test_the_contact_page_returns_a_successful_response(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    /**
     * Test that the deployment information package returns a valid status.
     */
    public function test_deploymentinfo_package_returns_valid_status(): void
    {
        $possibleResults = ['error', 'success'];
        $actualResult = DeploymentInfo::getStatus();
        $this->assertTrue(in_array($actualResult, $possibleResults));
    }
}
