<?php

namespace Tests\Feature;
use App\User;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guest_cannot_view_post_list()
    {
        $response = $this->get('/post');
        $response->assertRedirect('/login');
    }

    public function test_guest_cannot_view_post_create()
    {
        $response = $this->get('/post/create');
        $response->assertRedirect('/login');
    }

    public function test_auth_can_view_post_list()
    {

        $response = $this->post('/login', [
            'email' => 'boehm.charlene@example.net',
            'password' => 'i-love-laravel',
        ]);

        $response->assertRedirect('/home');

        $response = $this->get('/post');

        $response->assertSuccessful();
        $response->assertViewIs('posts.liste');
    }

    public function test_auth_can_view_post_create()
    {

        $response = $this->post('/login', [
            'email' => 'boehm.charlene@example.net',
            'password' => 'i-love-laravel',
        ]);

        $response->assertRedirect('/home');

        $response = $this->get('/post/create');

        $response->assertSuccessful();
        $response->assertViewIs('posts.add');
    }

    public function test_auth_can_create_post()
    {
        $id = rand(100, 1000);

        $response = $this->post('/login', [
            'email' => 'boehm.charlene@example.net',
            'password' => 'i-love-laravel',
        ]);

        $response->assertRedirect('/home');

        $response = $this->get('/post/create');

        $response->assertSuccessful();
        $response->assertViewIs('posts.add');

        $post = factory(Post::class)->create([
            'Titre' => "yo",
            'Description' =>"yoyoyoyoyoy",
            'User_id'=>$id
        ]);
        $response->assertSuccessful();

    }

    public function test_auth_cannot_create_empty_post()
    {
        $id = rand(100, 1000);

        $response = $this->post('/login', [
            'email' => 'boehm.charlene@example.net',
            'password' => 'i-love-laravel',
        ]);

        $response->assertRedirect('/home');

        $response = $this->get('/post/create');

        $response->assertSuccessful();
        $response->assertViewIs('posts.add');

        $post = factory(Post::class)->create([
            'User_id'=>$id
        ]);
        $this->assertNotEmpty($post);


    }

    public function test_auth_cannot_edit_random_post()
    {
        $id = rand(100, 1000);

        $response = $this->post('/login', [
            'email' => 'boehm.charlene@example.net',
            'password' => 'i-love-laravel',
        ]);

        $response->assertRedirect('/home');


        $response = $this->get('/post/create');

        $response->assertSuccessful();
        $response->assertViewIs('posts.add');

        $post = factory(Post::class)->create([
            'Titre' => "yo",
            'Description' =>"yoyoyoyoyoy",
            'User_id'=>$id
        ]);

        $response = $this->get('/post/45/edit');

        $response->assertRedirect('/post');

    }
    public function test_auth_cannot_delete_random_post()
    {
        $id = rand(100, 1000);

        $response = $this->post('/login', [
            'email' => 'boehm.charlene@example.net',
            'password' => 'i-love-laravel',
        ]);

        $response = $this->delete('/post/45');

        $response->assertRedirect('/post');

    }

}
