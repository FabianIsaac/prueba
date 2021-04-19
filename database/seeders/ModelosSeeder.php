<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();

        DB::table('modelos')->insert([ // 1
            'vehiculo' => 'FIAT FIORINO 1.2 CITY MJTD',
            'valor_permiso' => 85796,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 2
            'vehiculo' => 'JAGUAR F-PACE 2.0D PRESTIGE',
            'valor_permiso' => 725210,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 3
            'vehiculo' => 'KIA MOTORS FRONTIER C/C 2.5 6MT',
            'valor_permiso' => 210491,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 4
            'vehiculo' => 'KIA MOTORS FRONTIER P/UP 2.5L 6MT DLX DIF',
            'valor_permiso' => 242016,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 5
            'vehiculo' => 'MAHINDRA PIK-UP 2.2 CRDE D/C 4P TM 4X4',
            'valor_permiso' => 139788,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 6
            'vehiculo' => 'MAHINDRA PIK-UP XL C/S 4X2 CRDE',
            'valor_permiso' => 29500,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 7
            'vehiculo' => 'MAHINDRA PIK-UP XL D/C 4X2 EV',
            'valor_permiso' => 90889,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 8
            'vehiculo' => 'MAXUS T60 4X2 GL',
            'valor_permiso' => 153289,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 9
            'vehiculo' => 'MAZDA BT50 D/C 2.2L 4X4 SDX 6MT',
            'valor_permiso' => 346406,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 10
            'vehiculo' => 'MITSUBISHI L200 KATANA CR',
            'valor_permiso' => 69444,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 11
            'vehiculo' => 'NISSAN NP300 DC XE 2.3D MT',
            'valor_permiso' => 240530,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 12
            'vehiculo' => 'NISSAN TERRANO DX 4X2',
            'valor_permiso' => 51996,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 13
            'vehiculo' => 'NISSAN TERRANO DXS MT',
            'valor_permiso' => 5000,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 14
            'vehiculo' => 'PEUGEOT PARTNER 1.6 HDI AA E5',
            'valor_permiso' => 79396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 15
            'vehiculo' => 'PEUGEOT PARTNER 1.6 HDI E5',
            'valor_permiso' => 63396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 16
            'vehiculo' => 'SSANGYONG A.SPORTS 2.2 MT SEMI FULL',
            'valor_permiso' => 220908,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 17
            'vehiculo' => 'SSANGYONG A.SPORTS 4X2',
            'valor_permiso' => 73396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 18
            'vehiculo' => 'SSANGYONG A.SPORTS 4X2 AC LL',
            'valor_permiso' => 121789,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 19
            'vehiculo' => 'SUZUKI APV PICK UP 1.6',
            'valor_permiso' => 83396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 20
            'vehiculo' => 'SUZUKI JIMNY 1.3 JX PS WINCHE',
            'valor_permiso' => 40396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 21
            'vehiculo' => 'CHEVROLET D-MAX E4 CC 2.5D DAB ABS',
            'valor_permiso' => 40396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        DB::table('modelos')->insert([ // 22
            'vehiculo' => 'DODGE RAM 3.6 1500 SLT QUADCAB SPORT',
            'valor_permiso' => 40396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
    }
}
