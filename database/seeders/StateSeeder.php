<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class stateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        State::create(['code_ibge' => '35','name' => 'São Paulo','uf' => 'SP']);
        State::create(['code_ibge' => '41','name' => 'Paraná','uf' => 'PR']);
        State::create(['code_ibge' => '42','name' => 'Santa Catarina','uf' => 'SC']);
        State::create(['code_ibge' => '43','name' => 'Rio Grande do Sul','uf' => 'RS']);
        State::create(['code_ibge' => '50','name' => 'Mato Grosso do Sul','uf' => 'MS']);
        State::create(['code_ibge' => '11','name' => 'Rondônia','uf' => 'RO']);
        State::create(['code_ibge' => '12','name' => 'Acre','uf' => 'AC']);
        State::create(['code_ibge' => '13','name' => 'Amazonas','uf' => 'AM']);
        State::create(['code_ibge' => '14','name' => 'Roraima','uf' => 'RR']);
        State::create(['code_ibge' => '15','name' => 'Pará','uf' => 'PA']);
        State::create(['code_ibge' => '16','name' => 'Amapá','uf' => 'AP']);
        State::create(['code_ibge' => '17','name' => 'Tocantins','uf' => 'TO']);
        State::create(['code_ibge' => '21','name' => 'Maranhão','uf' => 'MA']);
        State::create(['code_ibge' => '24','name' => 'Rio Grande do Norte','uf' => 'RN']);
        State::create(['code_ibge' => '25','name' => 'Paraíba','uf' => 'PB']);
        State::create(['code_ibge' => '26','name' => 'Pernambuco','uf' => 'PE']);
        State::create(['code_ibge' => '27','name' => 'Alagoas','uf' => 'AL']);
        State::create(['code_ibge' => '28','name' => 'Sergipe','uf' => 'SE']);
        State::create(['code_ibge' => '29','name' => 'Bahia','uf' => 'BA']);
        State::create(['code_ibge' => '31','name' => 'Minas Gerais','uf' => 'MG']);
        State::create(['code_ibge' => '33','name' => 'Rio de Janeiro','uf' => 'RJ']);
        State::create(['code_ibge' => '51','name' => 'Mato Grosso','uf' => 'MT']);
        State::create(['code_ibge' => '52','name' => 'Goiás','uf' => 'GO']);
        State::create(['code_ibge' => '53','name' => 'Distrito Federal','uf' => 'DF']);
        State::create(['code_ibge' => '22','name' => 'Piauí','uf' => 'PI']);
        State::create(['code_ibge' => '23','name' => 'Ceará','uf' => 'CE']);
        State::create(['code_ibge' => '32','name' => 'Espírito Santo','uf' => 'ES']);
    }
}
