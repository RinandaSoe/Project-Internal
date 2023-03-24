<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Part extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'vendor' => $this->vendor,
            'qty' => $this->qty,
            "contract_price"=> $this->contract_price, 
            "cost_price"=> $this->cost_price,
            "cash_flow"=> $this->cash_flow,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
