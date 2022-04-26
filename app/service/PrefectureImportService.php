<?php


namespace App\service;


use App\Models\Prefecture;
use Rap2hpoutre\FastExcel\Facades\FastExcel;

class PrefectureImportService
{

    public function readExcelFile($path)
    {
        if (!empty($path) && is_file($path)) {
            $COLUMN_PREFECTURE = "Préfecture";

            FastExcel::import($path, function ($data) use ($COLUMN_PREFECTURE) {


                if (isset($data[$COLUMN_PREFECTURE])) {
                    $prefecture = new Prefecture();
                    $prefecture->nom = $data[$COLUMN_PREFECTURE];

                    $prefecture->save();
                }

            });
        }

    }

}
