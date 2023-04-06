<?php

namespace Database\Seeders;

use Jajo\NG;
use App\Models\Lga;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ng = new NG();

        foreach ($ng->states as $state) {
            $st = State::create(['name' => $state]);
            foreach ($ng->getLGA($state) as $lga) {
                $lg = Lga::create([
                    'state_id' => $st->id,
                    'name' => $lga
                ]);
            }
        }

    }
}
