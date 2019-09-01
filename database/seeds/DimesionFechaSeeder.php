<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\DimensionFecha;

class DimensionFechaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = []; 

        $intervalo = new DateInterval('P1D'); 
    
        $end = new DateTime('2019-12-31'); 
        $end->add($interval); 
    
        $periodo = new DatePeriod(new DateTime('2019-01-01'), $intervalo, $end); 
    
        foreach($periodo as $fecha) {
            $segmentos = [
                [
                    'id'        =>  1,
                    'segmento'  =>  'Mañana'
                ],
                [
                    'id'        =>  2,
                    'segmento'  =>  'Tarde'
                ],
                [
                    'id'        =>  3,
                    'segmento'  =>  'Noche'
                ]
            ];
            DB::table('dimension_fechas')->insert([
                'id'  =>  (int) ($fecha->format('Ymd') . '1'),
                'fecha'     =>  $fecha->format('Y-m-d'),
                'dia'       =>  dia($fecha->format('D')),
                'mes'       =>  mes($fecha->format('M')),
                'año'       =>  $fecha->format('Y'),
                'segmento'  =>  'Mañana'
            ]);
            
            DB::table('dimension_fechas')->insert([
                'id'  =>  (int) ($fecha->format('Ymd') . '2'),
                'fecha'     =>  $fecha->format('Y-m-d'),
                'dia'       =>  dia($fecha->format('D')),
                'mes'       =>  mes($fecha->format('M')),
                'año'       =>  $fecha->format('Y'),
                'segmento'  =>  'Tarde'
            ]);

            DB::table('dimension_fechas')->insert([
                'id'  =>  (int) ($fecha->format('Ymd') . '3'),
                'fecha'     =>  $fecha->format('Y-m-d'),
                'dia'       =>  dia($fecha->format('D')),
                'mes'       =>  mes($fecha->format('M')),
                'año'       =>  $fecha->format('Y'),
                'segmento'  =>  'Noche'
            ]);

        }    
    }

    function dia ($dia) {
        switch ($dia) {
            case 'Mon' : return 'Lunes';
            case 'Tue' : return 'Martes';
            case 'Wed' : return 'Miercoles';
            case 'Thu' : return 'Jueves';
            case 'Fri' : return 'Viernes';
            case 'Sat' : return 'Sabado';
            case 'Sun' : return 'Domingo';
        }
    }
    
    function mes ($mes) {
        switch ($mes) {
            case 'Jan' : return 'Enero';
            case 'Feb' : return 'Febrero';
            case 'Mar' : return 'Marzo';
            case 'Apr' : return 'Abril';
            case 'May' : return 'Mayo';
            case 'Jun' : return 'Junio';
            case 'Jul' : return 'Julio';
            case 'Aug' : return 'Agosto';
            case 'Sep' : return 'Septiembre';
            case 'Oct' : return 'Octubre';
            case 'Nov' : return 'Noviembre';
            case 'Dec' : return 'Diciembre';
        }
    }
}
