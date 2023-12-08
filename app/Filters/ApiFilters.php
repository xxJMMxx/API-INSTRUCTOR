<?php

namespace App\Filters;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Operator;

class ApiFilters{
    protected $safeParams = [];
    protected $columnMap = [];
    protected $operatorMap =[];

    public function transform(Request $request){
        $eloQuery=[];
        foreach($this->safeParams as $parm =>$operator){
            $query =$request->query($parm);
            if(!isset($query)){
                continue;
            }
            $column = $this->columnMap[$parm] ?? $parm;
            foreach($operator as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column,$this->operatorMap[$operator],$query[$operator]];

                }
            }
        }
        return $eloQuery;
    }
}

