<?php

use App\Models\Pivot\BookUser;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('only allows authenticated users can create a book page', function () {
    $response = $this->get('/books/create/');

    $response->assertStatus(302);
});

it('shows the available statuses on form', function () {
    $user = User::factory()->create();
    $this->actingAs($user)
        ->get('books/create')
        ->assertSeeTextInOrder(BookUser::$statuses);

});

