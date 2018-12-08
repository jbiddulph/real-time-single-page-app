<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PubResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pubname' => $this->rsPubName,
            'address' => $this->rsAddress,
            'address2' => $this->Add2,
            'town' => $this->rsTown,
            'county' => $this->rsCounty,
            'postcode' => $this->rsPostCode,
            'website' => $this->rsWebsite,
            'telephone' => $this->rsTel,
            'latitude' => $this->rsLat,
            'longitude' => $this->rsLong,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
