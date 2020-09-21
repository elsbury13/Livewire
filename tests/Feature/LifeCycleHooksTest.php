<?php

declare(strict_types = 1);

namespace Tests\Unit;

use App\Http\Livewire\LifeCycleHooks;
use Livewire\Livewire;
use Tests\TestCase;

class LifeCycleHooksTest extends TestCase
{
    public function testLifeCycleHooks()
    {
        $response = $this->get('/lifecycle-hooks');

        $response->assertStatus(200);
    }

    /*
    public function testUpdatedNewName()
    {
        $this->get('/lifecycle-hooks');

        Livewire::test(LifeCycleHooks::class)
            ->set('name', 'ash')
            ->set('newName', 'ash');
    }
    */
}
