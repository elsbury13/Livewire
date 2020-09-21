<?php

declare(strict_types = 1);

namespace Tests\Unit;

use App\Http\Livewire\Nesting;
use Livewire\Livewire;
use Tests\TestCase;

class NestingTest extends TestCase
{
    public function testNesting()
    {
        $response = $this->get('/nesting-events');

        $response->assertStatus(200);
    }

    public function testRefreshChildren()
    {
        Livewire::test(Nesting::class)
            ->call('refreshChildren');
    }

    public function testRefreshChildrenWithParam()
    {
        Livewire::test(Nesting::class)
            ->call('refreshChildrenWithParam', 'pikachu');
    }

    public function testRefreshChildrenDifferentName()
    {
        Livewire::test(Nesting::class)
            ->call('refreshChildrenDifferentName');
    }

    public function testRefreshChildrenAuto()
    {
        Livewire::test(Nesting::class)
            ->call('refreshChildrenAuto');
    }

    public function testRemoveName()
    {
        Livewire::test(Nesting::class)
            ->set('names', ['ash', 'misty'])
            ->call('removeName', 1)
            ->assertSet('names', ['ash']);
    }
}
