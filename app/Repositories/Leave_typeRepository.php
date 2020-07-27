<?php

namespace App\Repositories;

use App\Models\Leave_type;
use App\Repositories\BaseRepository;

/**
 * Class Leave_typeRepository
 * @package App\Repositories
 * @version June 20, 2019, 12:42 pm UTC
*/

class Leave_typeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Leave_type::class;
    }
}
