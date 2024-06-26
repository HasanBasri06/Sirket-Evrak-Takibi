<?php

namespace App\Repositories;

use App\Models\Company;
use Illuminate\Http\JsonResponse;

interface CompanyRepositoryInterface {
    /**
     * @param $company
     * @return void
     */
    public function store($company): JsonResponse;

    /**
     * @param string $email
     * @return boolean
     */
    public function hasCompanyByEmail(string $email = null): bool;

    /**
     * @param int $companyId
     */
    public function hasCompany(int $companyId);

    /**
     * @param int $companyId
     */
    public function requestCompany(int $companyId);
}
