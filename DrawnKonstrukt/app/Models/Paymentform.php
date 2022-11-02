<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentform extends Model
{
    use HasFactory;
    protected $fillable=[
   'Employer',
    'Person',
    'Project',
    'Number',
    'Period',
    'Work',
    'Contract',
     'Prepared',
    'OrigiAmount',
    'NetChange',
    'TotalComplete',
    'Retain',
    'Retainage',
    'Previours',
    'Dues',
    'Balance',
    'Contractor',
    'Date',
    'County',
    'Location',
    'Day',
    'Month',
    'Expire',
    'Public',
    'AmountCert',
    'Engineer',
    'DDay',
];
}
