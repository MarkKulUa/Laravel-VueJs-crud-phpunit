<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseTransactions;

    protected $user;

    public function getUser()
    {
        if (!$this->user) {
            $this->user = User::factory()->create();
        }

        return $this->user;
    }
}
