<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    // TODO: Declare 3 properties (status, message, resource) with public visibility
    public $status;
    public $message;
    public $resource;    

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    public function toArray(Request $request): array
    {
        // TODO: Complete the return with 'success' from the status property, 'message' from the message property, and 'data' from the resource property
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data'    => $this->resource,
        ];
    }
}
