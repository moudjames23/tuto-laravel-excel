<?php

namespace Database\Seeders;

use App\service\PrefectureImportService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // On supprime toutes les donnees de la table
        DB::table('prefectures')->delete();

        // on recupere le chemin du fichier qui se trouve dans le dossier public
        $path = public_path('prefectures.xlsx');

        // On fait appel à notre service pour le lire le fichier excel
        $service = new PrefectureImportService();
        $service->readExcelFile($path);
    }
}
