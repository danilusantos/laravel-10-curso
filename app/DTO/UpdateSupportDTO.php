<?php

namespace App\DTO;

use App\Http\Requests\admin\SupportRequest;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $body
    ) {
    }

    public static function makeFromRequest(SupportRequest $request, $id): self
    {
        return new self(
            $id,
            $request->subject,
            'a',
            $request->body
        );
    }
}
