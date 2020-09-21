<?php

declare(strict_types = 1);

namespace Tests\Unit;

use App\Http\Livewire\PeopleComponent;
use App\People;
use Livewire\Livewire;
use Tests\TestCase;

class PeopleTest extends TestCase
{
    public function testPeople()
    {
        $response = $this->get('/people');

        $response->assertStatus(200);
    }

    public function testCanCreatePerson()
    {
        Livewire::test(PeopleComponent::class)
            ->set('name', 'Brock')
            ->set('phone', 1234567890)
            ->call('store');

        $this->assertTrue(People::whereName('Brock')->exists());
        $this->assertTrue(People::wherePhone(1234567890)->exists());
    }

    public function testNameIsRequired()
    {
        Livewire::test(PeopleComponent::class)
            ->set('name', '')
            ->call('store')
            ->assertHasErrors(['name' => 'required']);
    }

    public function testPhoneIsRequired()
    {
        Livewire::test(PeopleComponent::class)
            ->set('phone', '')
            ->call('store')
            ->assertHasErrors(['phone' => 'required']);
    }

    public function testCanUpdatePerson()
    {
        $id = People::where('name', 'Brock')->first()->id;

        Livewire::test(PeopleComponent::class)
            ->set('name', 'Brock-replaced')
            ->set('phone', 11119999)
            ->set('selectedId', $id)
            ->call('update');

        $this->assertTrue(People::whereName('Brock-replaced')->exists());
        $this->assertTrue(People::wherePhone(11119999)->exists());
    }

    public function testCanEditPerson()
    {
        $id = People::where('name', 'Brock-replaced')->first()->id;

        Livewire::test(PeopleComponent::class)
            ->set('name', 'Brock')
            ->set('phone', 11119999)
            ->assertSet('name', 'Brock')
            ->assertSet('phone', 11119999)
            ->call('edit', $id);
    }

    public function testDeletePerson()
    {
        $id = People::where('name', 'Brock-replaced')->first()->id;

        Livewire::test(PeopleComponent::class)
            ->call('destroy', (int) $id);

        $this->assertFalse(People::whereName('Brock-replaced')->exists());
    }
}
