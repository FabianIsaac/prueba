<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MultasSeeder extends Seeder
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

        DB::table('multas')->insert([
            'patente' => 'BZXJ51',
            'vehiculo' => 'NISSAN TERRANO DX 4X2',
            'valor_permiso' => 51996,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 51996,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'CJCT94',
            'vehiculo' => 'NISSAN TERRANO DXS MT',
            'valor_permiso' => 60250,
            'interes_y_reajuste' => 4972,
            'registro_de_multas_impagas' => 54164,
            'subtotal' => 119386,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'CKLX28',
            'vehiculo' => 'SUZUKI JIMNY 1.3 JX PS WINCHE',
            'valor_permiso' => 40396,
            'interes_y_reajuste' => 606,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 41002,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'CKXX38',
            'vehiculo' => 'MAHINDRA PIK-UP XL C/S 4X2 CRDE',
            'valor_permiso' => 29500,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 29500,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'DXGH73',
            'vehiculo' => 'SSANGYONG A.SPORTS 4X2',
            'valor_permiso' => 73396,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 73396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'FBFW92',
            'vehiculo' => 'CHEVROLET D-MAX E4 CC 2.5D DAB ABS',
            'valor_permiso' => 78396,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 78396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'GDCL22',
            'vehiculo' => 'PEUGEOT PARTNER 1.6 HDI E5',
            'valor_permiso' => 63396,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 63396,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'GXFZ44',
            'vehiculo' => 'PEUGEOT PARTNER 1.6 HDI AA E5',
            'valor_permiso' => 79396,
            'interes_y_reajuste' => 6552,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 85948,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'GXVW73',
            'vehiculo' => 'MITSUBISHI L200 KATANA CR',
            'valor_permiso' => 69444,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 69444,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'GZJL11',
            'vehiculo' => 'MAHINDRA PIK-UP XL D/C 4X2 EV',
            'valor_permiso' => 90889,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 90889,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'GZJL13',
            'vehiculo' => 'MAHINDRA PIK-UP XL D/C 4X2 EV',
            'valor_permiso' => 90889,
            'interes_y_reajuste' => 7500,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 98389,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'GZJL15',
            'vehiculo' => 'MAHINDRA PIK-UP XL D/C 4X2 EV',
            'valor_permiso' => 90889,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 90889,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'GZXJ36',
            'vehiculo' => 'SSANGYONG A.SPORTS 4X2 AC LL',
            'valor_permiso' => 121789,
            'interes_y_reajuste' => 10051,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 131840,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'HSGZ67',
            'vehiculo' => 'DODGE RAM 3.6 1500 SLT QUADCAB SPORT',
            'valor_permiso' => 304006,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 304006,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'HTGC14',
            'vehiculo' => 'SUZUKI APV PICK UP 1.6',
            'valor_permiso' => 83396,
            'interes_y_reajuste' => 6883,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 90279,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'HVHS97',
            'vehiculo' => 'NISSAN NP300 DC XE 2.3D MT',
            'valor_permiso' => 240530,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 240530,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'HWGB93',
            'vehiculo' => 'SSANGYONG A.SPORTS 4X2 AC LL',
            'valor_permiso' => 151189,
            'interes_y_reajuste' => 2268,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 153457,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JDCX57',
            'vehiculo' => 'MAHINDRA PIK-UP XL D/C 4X2 EV',
            'valor_permiso' => 90889,
            'interes_y_reajuste' => 7500,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 98389,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JFCV61',
            'vehiculo' => 'MAHINDRA PIK-UP 2.2 CRDE D/C 4P TM 4X4',
            'valor_permiso' => 139788,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 139788,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JLWT40',
            'vehiculo' => 'SSANGYONG A.SPORTS 2.2 MT SEMI FULL',
            'valor_permiso' => 220908,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 220908,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JPWC15',
            'vehiculo' => 'MAHINDRA PIK-UP 2.2 CRDE D/C 4P TM 4X4',
            'valor_permiso' => 139788,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 139788,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JSHS48',
            'vehiculo' => 'FIAT FIORINO 1.2 CITY MJTD',
            'valor_permiso' => 85796,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 85796,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JSHS49',
            'vehiculo' => 'KIA MOTORS FRONTIER P/UP 2.5L 6MT DLX DIF',
            'valor_permiso' => 242016,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 242016,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JSSL55',
            'vehiculo' => 'KIA MOTORS FRONTIER C/C 2.5 6MT',
            'valor_permiso' => 210491,
            'interes_y_reajuste' => 17370,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 227861,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JTFT53',
            'vehiculo' => 'MAHINDRA PIK-UP 2.2 CRDE D/C 4P TM 4X4',
            'valor_permiso' => 139788,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 139788,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JVYB51',
            'vehiculo' => 'JAGUAR F-PACE 2.0D PRESTIGE',
            'valor_permiso' => 725210,
            'interes_y_reajuste' => 10878,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 736088,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'JZLC18',
            'vehiculo' => 'MITSUBISHI L200 KATANA CR',
            'valor_permiso' => 276888,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 276888,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'KHST64',
            'vehiculo' => 'MAXUS T60 4X2 GL',
            'valor_permiso' => 153289,
            'interes_y_reajuste' => 0,
            'registro_de_multas_impagas' => 108328,
            'subtotal' => 261617,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
        
        DB::table('multas')->insert([
            'patente' => 'KKPY24',
            'vehiculo' => 'MAZDA BT50 D/C 2.2L 4X4 SDX 6MT',
            'valor_permiso' => 346406,
            'interes_y_reajuste' => 28587,
            'registro_de_multas_impagas' => 0,
            'subtotal' => 374993,
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
    }
}
