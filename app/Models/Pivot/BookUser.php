<?php

namespace App\Models\Pivot;

class BookUser extends \Illuminate\Database\Eloquent\Relations\Pivot
{
    public static $statuses = [
        'WANT_TO_READ' => 'Want to read',
        'READING' => 'Reading',
        'READ' => 'Read'
    ];
}
