<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LiveChatControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testUserCanSendMessageToAnotherUser()
    {
        // Create two users
        $sender = User::factory()->create();
        $recipient = User::factory()->create();

        // Login the sender user
        $this->actingAs($sender);

        // Send a message to the recipient user
        $response = $this->post('/chatify/sendMessage', [
            'type' => 'user',
            'recipient_id' => $recipient->id,
            'to_id' => $recipient->id,
            'message' => $this->faker->sentence,
        ]);

        // Assert that the message was sent successfully
        $response->assertStatus(200);
        $this->assertDatabaseHas('ch_messages', [
            'type' => 'user',
            'from_id' => $sender->id,
            'to_id' => $recipient->id,
            'body' => $response['message'],
            'seen' => false,
        ]);
    }
}
