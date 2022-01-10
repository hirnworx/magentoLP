<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\City;

class UpdateWikiCityDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();
        foreach ($cities as $key => $value) {
            DB::table('cities')->where("id",$value->id)->update([
                'wikipedia_city_name' => trim($value->city_name)
            ]);
        }

        DB::table('cities')->where('wikipedia_city_name', 'Ludwigshafen')->update(['wikipedia_city_name' => 'Ludwigshafen_am_Rhein']);
        DB::table('cities')->where('wikipedia_city_name', 'Artern/Unstrut')->update(['wikipedia_city_name' => 'Artern']);
        DB::table('cities')->where('wikipedia_city_name', 'Bischofsheim an der Rhön')->update(['wikipedia_city_name' => 'Bischofsheim_in_der_Rhön']);
        DB::table('cities')->where('wikipedia_city_name', 'Eisleben')->update(['wikipedia_city_name' => 'Lutherstadt_Eisleben']);
        DB::table('cities')->where('wikipedia_city_name', 'Königsee-Rottenbach')->update(['wikipedia_city_name' => 'Königsee']);
        DB::table('cities')->where('wikipedia_city_name', 'Oberweißbach/Thür. Wald')->update(['wikipedia_city_name' => 'Oberweißbach/Thüringer_Wald']);
        DB::table('cities')->where('wikipedia_city_name', 'Rothenburg/O.L.')->update(['wikipedia_city_name' => 'Rothenburg/Oberlausitz']);
        DB::table('cities')->where('wikipedia_city_name', 'Rottenburg a.d.Laaber')->update(['wikipedia_city_name' => 'Rottenburg_an_der_Laaber']);
        DB::table('cities')->where('wikipedia_city_name', 'Stollberg/Erzgeb.')->update(['wikipedia_city_name' => 'Stollberg/Erzgebirge']);
        DB::table('cities')->where('wikipedia_city_name', 'Tessin')->update(['wikipedia_city_name' => 'Kanton_Tessin']);
        DB::table('cities')->where('wikipedia_city_name', 'Weißwasser/O.L.')->update(['wikipedia_city_name' => 'Weißwasser/Oberlausitz']);
        DB::table('cities')->where('wikipedia_city_name', 'Wittenberg')->update(['wikipedia_city_name' => 'Lutherstadt_Wittenberg']);
      

    }
}
