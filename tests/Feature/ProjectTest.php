<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    
    /** @test */
    public function a_user_can_create_a_project()
    {
        $this->withExceptionHandling();
        
        $attributes = [
            "title"=>$this->faker->sentence,
            "description"=>$this->faker->paragraph
        
        ];
        
        $this->post('/projects',$attributes)->assertRedirect('/projects');
        
        $this->assertDatabaseHas('projects',$attributes);
    }
   
}
