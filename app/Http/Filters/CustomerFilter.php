<?php

namespace App\Http\Filters;

use Illuminate\Http\Request;
use App\Http\Filters\ApiFilter;

class CustomerFilter extends ApiFilter
{
    protected $safeParams = [
        'name' => ['eq', 'like'],
        'type' => ['eq', 'like'],
        'email' => ['eq', 'like'],
        'address' => ['eq', 'like'],
        'city' => ['eq', 'like'],
        'state' => ['eq', 'like'],
        'postalCode' => ['eq', 'gt', 'lt'],
    ];
    protected $columnMap = [
        'postalCode' => 'postal_code',
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

}
