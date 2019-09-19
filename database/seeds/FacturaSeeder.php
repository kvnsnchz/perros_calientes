<?php

use Illuminate\Database\Seeder;
use App\Factura;
use App\Cliente;
use App\Sucursal;
use App\Pedido;
use App\Perro;
use App\Ingrediente;
use App\IngredienteEliminado;
use App\Bebida;
use App\BebidaPedido;
use Carbon\Carbon;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($x = 3; $x > 0; $x--){
            for ($i=0; $i < 7; $i++) { 

                $facturas = rand(200, 300);
    
                for ($j=0; $j < $facturas; $j++) { 
                    $dia_inicio = strtotime(Carbon::now()->subDays(7*$x - $i)->format('Y-m-d'));
                    $dia_final = strtotime(Carbon::now()->subDays(7*$x - 1 - $i)->format('Y-m-d'));
                    $fecha = mt_rand($dia_inicio, $dia_final);    
                    $fecha = date('Y-m-d H:i:s', $fecha);
    
                    $factura = Factura::create([
                        'precio'   =>  0,
                        'sucursal_id'   =>  Sucursal::inRandomOrder()->first()->id,
                        'cliente_id'    =>  Cliente::inRandomOrder()->first()->id,
                        'fecha'         =>  $fecha
                    ]);
    
                    $pedidos = rand(1, 4);
                    $precio = 0;
    
                    for($k = 0; $k < $pedidos; $k ++) {
                        
                        $perro = Perro::inRandomOrder()->first();
    
                        $pedido = Pedido::create([
                            'perro_id'      =>  $perro->id,
                            'factura_id'    =>  $factura->id
                        ]);
    
                        $precio += $perro->precio;
    
                        $bebidas = rand(0, 2);
    
                        for ($l=0; $l < $bebidas; $l++) { 
                            $cantidad = rand(1, 2);
                            $bebida = Bebida::inRandomOrder()->first();
    
                            BebidaPedido::create([
                                'cantidad'  => $cantidad,
                                'bebida_id'      =>  $bebida->id,
                                'pedido_id'    =>  $pedido->id
                            ]);
    
                            $precio += $bebida->precio * $cantidad;
                        }
    
                        if(rand(0, 100) > 70){
    
                            $ingredientes_eliminados = rand(0, 4);
    
                            $ingredientes = Ingrediente::inRandomOrder()->get();
    
                            for ($l=0; $l < $ingredientes_eliminados; $l++) { 
    
                                IngredienteEliminado::create([
                                    'ingrediente_id'      =>  $ingredientes[$l]->id,
                                    'pedido_id'    =>  $pedido->id
                                ]);
    
                            }
                        }
                        
                    }
    
                    $factura->precio = $precio;
                    $factura->save();
    
                }
                
            }
        }
        
    }
}
