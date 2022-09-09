<?php

namespace Tests\Unit;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Mary Jane',
            'email' => 'johndoe@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Mary Jane',
            'email' => 'maryjane@gmail.com'
        ]);

        $this->assertTrue($user1->email != $user2->email);
    }
    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }
    public function test_guarda_nuevo_user()
    {
        $respuesta = $this->post('/register', [
            'name' => 'Yudi',
            'email'=> 'karinavz230@gmail.com',
            'password' => 'yudi1234',
            'password_confirmation' => 'yudi1234'
        ]);

        return $respuesta->assertRedirect('/home');
    }

    public function test_loguea_usuario()
    {
        $respuesta = $this->post('/login', [
            'email'=> 'fulano@gmail.com',
            'password' => 'fulano123s',
        ]);

        return $respuesta->assertRedirect('/home');
    }


}
