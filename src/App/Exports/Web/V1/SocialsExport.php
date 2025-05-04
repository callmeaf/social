<?php

namespace Callmeaf\Social\App\Exports\Web\V1;

use Callmeaf\Social\App\Models\Social;
use Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class SocialsExport implements FromCollection,WithHeadings,Responsable,WithMapping,WithCustomChunkSize
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private $fileName = '';

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    private SocialRepoInterface $socialRepo;
    public function __construct()
    {
        $this->socialRepo = app(SocialRepoInterface::class);
        $this->fileName = $this->fileName ?: \Base::exportFileName(model: $this->socialRepo->getModel()::class,extension: $this->writerType);
    }

    public function collection()
    {
        if(\Base::getTrashedData()) {
            $this->socialRepo->trashed();
        }

        $this->socialRepo->latest()->search();

        if(\Base::getAllPagesData()) {
            return $this->socialRepo->lazy();
        }

        return $this->socialRepo->paginate();
    }

    public function headings(): array
    {
        return [
           // 'status',
        ];
    }

    /**
     * @param Social $row
     * @return array
     */
    public function map($row): array
    {
        return [
            // $row->status?->value,
        ];
    }

    public function chunkSize(): int
    {
        return \Base::config('export_chunk_size');
    }
}
