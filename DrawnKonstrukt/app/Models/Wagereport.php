<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wagereport extends Model
{
    use HasFactory;
    protected $primaryKey = 'WagereportId';

    protected $fillable=[
     'name',
    'Manager',
    'code',
    'Location',
    'SiteManager',
    'ContractNo',
    'Payroll',
    'Week',
    'Start',
    'End',
    'Names',
    'Work',
    'Mon',
    'Tue',
    'Wed',
    'Thr',
    'Fri',
    'Sat',
    'Sun',
    'Total',
    'Rate',
    'Gross',
    'Nhif',
    'Nssf',
    'Other',
    'GrandTotal',
    'Net',
    'Note',
    ];

}
