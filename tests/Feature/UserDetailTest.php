<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\UserDetail;

class UserDetailTest extends TestCase
{
    /**
     * A basic test for delete user if user detail exists 
     *
     * @return void
     */
    public function test_user_detail_if_user_detail_exists()
    {
        $user = User::factory()->create();
        $response = $this->deleteJson('/user/delete/' . $user->id);

        $response
                ->assertStatus(200)
                ->assertJson([
                    'Message' => "The user deleted successfull",
                ]);
    }

      /**
     * A basic test for delete user if user detail not exists 
     *
     * @return void
     */
    public function test_user_detail_if_user_detail_not_exists()
    {
        //$user = User::factory()->create();
        $response = $this->deleteJson('/user/delete/1');

        $response
                ->assertStatus(400)
                ->assertJson([
                    'Message' => "The user can not delete because User Detail is exists",
                ]);
    }

     /**
     * A basic test for delete user if user not found for deleter
     *
     * @return void
     */
    public function test_user_detail_if_user_detail_not_found()
    {
        $response = $this->deleteJson('/user/delete/10001');

        $response
                ->assertStatus(404)
                ->assertJson([]);
    }
}
