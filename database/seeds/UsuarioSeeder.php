<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
        'name' => 'Henrique',
        'email' => 'admin@email.com',
        'password' => bcrypt('12345'),
        ];
        if(User::where('email', '=',$dados['email'])->count()){
            $usuario = User::where('email', '=',$dados['email'])->first();
            $usuario->update($dados);
        }else{
            User::create($dados);
        }
    }
}
