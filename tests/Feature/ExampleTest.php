<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_the_application_returns_a_successful_response_if_code_200_1()
    {
        $response = $this->get(route('pattern'));

        // dd($response->baseResponse->getOriginalContent());

        $response->assertOk();
    }

    public function test_the_application_returns_a_successful_response_if_code_200_2()
    {
        $response = $this->get(route('pattern2'));

        // dd($response->baseResponse->getOriginalContent());

        $response->assertOk();
    }

    public function test_the_application_returns_a_successful_response_if_code_200_3()
    {
        $response = $this->get(route('pattern3'));

        // dd();

        $response->assertOk();
    }
}
