<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostListControllerTest extends TestCase
{
   use RefreshDatabase;
   /** @test */
   function blog_list_display()
   {
      // $post1 = Post::factory()->create();
      // $post2 = Post::factory()->create();

      // $this->get('/')
      //       ->assertOk()
      //       ->assertSee($post1->title)
      //       ->assertSee($post2->title);

      $post1 = Post::factory()->create(['title' => 'ブログのタイトル1']);
      $post2 = Post::factory()->create(['title' => 'ブログのタイトル2']);

      $this->get('/')
            ->assertOk()
            ->assertSee('ブログのタイトル1')
            ->assertSee('ブログのタイトル2');
   }

   /** @test */
   function check_factory()
   {
      $post = Post::factory()->create();
      dump($post->toArray());

      dump(User::get()->toArray());

      $this->assertTrue(true);
   }
}
