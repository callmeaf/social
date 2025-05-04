<?php

namespace Callmeaf\Social\App\Http\Controllers\Api\V1;

use Callmeaf\Base\App\Http\Controllers\Api\V1\ApiController;
use Callmeaf\Social\App\Repo\Contracts\SocialRepoInterface;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class SocialController extends ApiController implements HasMiddleware
{
    public function __construct(protected SocialRepoInterface $socialRepo)
    {
        parent::__construct($this->socialRepo->config);
    }

    public static function middleware(): array
    {
        return [
           //
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->socialRepo->latest()->search()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->socialRepo->create(data: $this->request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->socialRepo->findById(value: $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        return $this->socialRepo->update(id: $id, data: $this->request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->socialRepo->delete(id: $id);
    }

    public function statusUpdate(string $id)
    {
        return $this->socialRepo->update(id: $id, data: $this->request->validated());
    }

    public function typeUpdate(string $id)
    {
        return $this->socialRepo->update(id: $id, data: $this->request->validated());
    }

    public function trashed()
    {
        return $this->socialRepo->trashed()->latest()->search()->paginate();
    }

    public function restore(string $id)
    {
        return $this->socialRepo->restore(id: $id);
    }

    public function forceDestroy(string $id)
    {
        return $this->socialRepo->forceDelete(id: $id);
    }
}
