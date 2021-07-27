<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SetResource extends JsonResource
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
            'scry_id'  => $this->scry_id,
            'code'  => $this->code,
            'name'  => $this->name,
            'release_date'  => $this->release_date,
            'icon_svg_uri'  => $this->icon_svg_uri,
        ];
    }
}
