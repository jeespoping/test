<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateVectorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function vector(int $number){
        $vector = [$number];
        if ($number > 1){
            $vector[($number/2) - 1] = 0;
            for ($i = 0; $i <= $number; $i++){
                if($i%2==0){
                    $vector[$i] = 2;
                }
            }
        }
        return False;
    }

    public function test_vector_n_is_grater_1()
    {
        assert(True==$this->vector(2));
    }

    public function test_vector_n_is_grater_1()
    {
        assert(True==$this->vector(2));
    }
}
