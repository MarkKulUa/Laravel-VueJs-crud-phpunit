<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Company;

class CompanyTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->actingAs($this->getUser());
    }

    public function test_index()
    {
        $response = $this->get('/api/companies');

        $response->assertJson([
            'data' => Company::all()->toArray()
        ]);
    }

    public function test_store()
    {
        $company = Company::factory()->make();

        $data = [
            'name' => $company->name,
            'email' => $company->email,
            'address' => $company->address,
            'website' => $company->website
        ];

        $response = $this->post('/api/companies/', $data);

        $response->assertJson([
            'data' => Company::where('email', $company->email)->first()->toArray()
        ]);
    }

    public function test_show()
    {
        $company = Company::factory()->create();

        $response = $this->get('/api/companies/' . $company->id);

        $response->assertJson([
            'data' => $company->toArray()
        ]);
    }

    public function test_update()
    {
        $company = Company::factory()->create();

        $this->put('/api/companies/' . $company->id, [
            'name' => 'test name',
            'email' => $company->email,
            'address' => $company->address,
            'website' => $company->website
        ]);

        $this->assertEquals(Company::find($company->id)->name, 'test name');
    }

    public function test_destroy()
    {
        $company = Company::factory()->create();

        $this->delete('/api/companies/' . $company->id);

        $this->assertNull(Company::find($company->id));
    }
}
