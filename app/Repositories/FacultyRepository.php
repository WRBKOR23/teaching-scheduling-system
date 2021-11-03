<?php

namespace App\Repositories;

use App\Models\Account;
use App\Models\Faculty;
use Illuminate\Support\Collection;

class FacultyRepository implements Contracts\FacultyRepositoryContract
{
    public function get ($id_account)
    {
        return Account::find($id_account)->faculty;
    }

    public function getIDFaculties ($data) : Collection
    {
        return Faculty::whereNotIn('id', $data)->orderBy('id')
                      ->get(['id as id_faculty', 'name as faculty_name']);
    }
}
