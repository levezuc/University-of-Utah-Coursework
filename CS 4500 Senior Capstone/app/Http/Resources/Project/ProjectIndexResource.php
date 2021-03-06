<?php

namespace App\Http\Resources\Project;

use App\Models\Project;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectIndexResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var Project $this */
        return [
            'id'                => $this->id,
            'team'              => $this->team,
            'name'              => $this->name,
            'description'       => $this->description,
            'address'           => $this->address,
            'city'              => $this->city,
            'state'             => $this->state,
            'zip'               => $this->zip,
            'contact_name'      => $this->contact_name,
            'contact_phone'     => $this->contact_phone,
            'contact_email'     => $this->contact_email,
            'sq_foot'           => $this->sq_foot,
            'labor_hours'       => $this->labor_hours,
            'labor_rate'        => $this->labor_rate,
            'percentage_on_top' => $this->percentage_on_top,
            'created_by'        => $this->createdBy,
            'created_at'        => $this->created_at->format('F d, Y'),
        ];
    }
}
