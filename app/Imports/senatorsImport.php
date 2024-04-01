<?php

namespace App\Imports;

use App\Models\senators;
use Maatwebsite\Excel\Concerns\ToModel;

class senatorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new senators([
            'name'     => $row[0],
            'state'    => $row[3],
            'party' => $row[6],
            'class'    => $row[8],
            'office_room'    => $row[10],
            'contact'    => $row[13],
            // 'current_score'    => $row[5],
            // 'weekly_range'    => $row[6],
            // 'ytd_range'    => $row[7],
            // 'y1_range'    => $row[8],
            // 'all_time_high'    => $row[9],
            // 'all_time_low'    => $row[10],
            // 'news_mentions'    => $row[11],
            // 'social_posts'    => $row[12],
            // 'short_description'    => $row[13],
            // 'description'    => $row[14],
            // 'contact'    => $row[15],
            // 'email'    => $row[16],
            // 'twitter'    => $row[17],
            // 'facebook'    => $row[18],
            // 'linkedin'    => $row[19],

        ]);
    }
}
