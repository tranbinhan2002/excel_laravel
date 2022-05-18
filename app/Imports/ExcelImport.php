<?php

namespace App\Imports;

use App\Models\FacebookLocation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {

        foreach ($rows as $index=>$row)
        {
            if($index > 0 ){
                $facebook = FacebookLocation::where('key',$row[0])->first();
                $facebook->radius = $row[7];
                $facebook->is_jp = 1;
                $facebook->save();
            }
        }
    }
}
