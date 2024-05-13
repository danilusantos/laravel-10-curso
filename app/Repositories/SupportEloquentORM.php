<?php

use App\Repositories\SupportRepositoryInterface;
use App\DTO\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Models\Support;
use stdClass;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function __construct(
        protected Support $model
    ) {
    }

    public function getAll(string $filter = null): array
    {
        return $this->model
            ->where(function ($query) use ($filter) {
                if ($filter) {
                    $query->where('subject', $filter);
                    $query->orWhere('body', 'like', "%{$filter}%");
                }
            })
            ->paginate()
            ->toArray();
    }

    public function findOne(string $id): stdClass|null
    {
        if (! $support = $this->model->find($id)) {
            return null;
        }

        return (object) $support->toArray();
    }

    public function delete(string $id): void
    {
        $this->model
            ->findOrFail($id)
            ->delete();
    }

    public function new(CreateSupportDTO $dto): stdClass
    {

    }

    public function update(UpdateSupportDTO $dto): stdClass|null
    {

    }

}
