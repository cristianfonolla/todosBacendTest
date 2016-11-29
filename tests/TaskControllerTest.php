<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class TaskControllerTest
 */
class TaskControllerTest extends TestCase
{

    use DatabaseMigrations;

        /**
     * @return mixed
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Http\Kernel::class);

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }


    /**
     * A basic test example.
     * @group todo
     * @return void
     */
    public function testExample()
    {
        //Prepare
        //Execute
        //Comprovaci/Assercions
        $this->login();

        $response = $this->call('GET', '/tasks');

        $this->assertEquals(200, $response->status());

        $this->assertViewHas('tasks');



    }

    /**
     * @param $user
     */
    public function login()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
    }
}
