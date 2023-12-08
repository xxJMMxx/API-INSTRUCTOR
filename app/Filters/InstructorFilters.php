<?php

namespace App\Filters;
use App\Filters\ApiFilters;
use Illuminate\Http\Request;

class InstructorFilters extends ApiFilters {
    protected $safeParams = [
        'name' =>['eq'],
        'lastname' =>['eq'],
        'education' =>['eq,lte,gte,'],
        'rfc' =>['eq,lte,gte,'],
        'sex' =>['eq'],
    ];
    protected $columnMap = [
        'name' => 'name',
    ];
    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    
}
