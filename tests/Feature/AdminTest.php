<?php

namespace Tests\Feature;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

        public function test_user_can_get_admin_panel()
        {
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'i-love-laravel'),
                'prof'=>'1'
            ]);
            $response = $this->post('/login', [
                'email' => $user->email,
                'password' => $password,
            ]);
            $response->assertRedirect('/home');
            $this->assertAuthenticatedAs($user);

            $response = $this->get('/user');

            $response->assertSuccessful();

        }


        public function test_user_cannot_get_admin_panel()
        {
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'i-love-laravel'),
                'prof'=>'0'
            ]);
            $response = $this->post('/login', [
                'email' => $user->email,
                'password' => $password,
            ]);
            $response->assertRedirect('/home');
            $this->assertAuthenticatedAs($user);
            $response = $this->get('/user');
            $response->assertRedirect('/');
        }

        public function test_admin_can_edit_user()
        {
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'i-love-laravel'),
                'prof'=>'1'
            ]);
            $response = $this->post('/login', [
                'email' => $user->email,
                'password' => $password,
            ]);
            $response->assertRedirect('/home');
            $this->assertAuthenticatedAs($user);
            $response = $this->get('/user/13/edit');
            $response->assertSuccessful();
            $response->assertViewIs('edit');
        }

        public function test_admin_cannot_edit_user()
        {
            $user = factory(User::class)->create([
                'password' => bcrypt($password = 'i-love-laravel'),
                'prof'=>'0'
            ]);
            $response = $this->post('/login', [
                'email' => $user->email,
                'password' => $password,
            ]);
            $response->assertRedirect('/home');
            $this->assertAuthenticatedAs($user);
            $response = $this->get('/user/13/edit');
            $response->assertRedirect('/');
        }

}
