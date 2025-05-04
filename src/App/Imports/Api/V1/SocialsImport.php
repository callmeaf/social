<?php

namespace Callmeaf\Social\App\Imports\Api\V1;

use Callmeaf\Base\App\Services\Importer;
use Callmeaf\Social\App\Enums\SocialStatus;
use Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SocialsImport extends Importer implements ToCollection,WithChunkReading,WithStartRow,SkipsEmptyRows,WithValidation,WithHeadingRow
{
    private SocialRepoInterface $socialRepo;

    public function __construct()
    {
        $this->socialRepo = app(SocialRepoInterface::class);
    }

    public function collection(Collection $collection)
    {
        $this->total = $collection->count();

        foreach ($collection as $row) {
            $this->socialRepo->freshQuery()->create([
                // 'status' => $row['status'],
            ]);
            ++$this->success;
        }
    }

    public function chunkSize(): int
    {
        return \Base::config('import_chunk_size');
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        $table = $this->socialRepo->getTable();
        return [
            // 'status' => ['required',Rule::enum(SocialStatus::class)],
        ];
    }

}
