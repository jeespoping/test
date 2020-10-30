<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateBisiestoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function isleap(int $year){
        if ($year%4 != 0){
            return False;
        }elseif ($year%4 == 0 && $year%100!=0 && $year%400!=0){
            return True;
        }elseif ($year%4 == 0 && $year%100==0 && $year%400!=0){
            return False;
        }
        return $year%4 == 0 && $year%100==0 && $year%400==0 ;
    }

    public function test_leap()
    {
        $real = $this->isleap(2020);
        $esperado = True;
        assert($real == $esperado);
    }

}
