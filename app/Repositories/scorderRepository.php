<?php

namespace App\Repositories;

use App\Models\scorder;
use App\Repositories\BaseRepository;

/**
 * Class scorderRepository
 * @package App\Repositories
 * @version April 30, 2020, 12:19 pm UTC
*/

class scorderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'orderdate',
        'deliverystreet',
        'deliverycity',
        'deliverycounty',
        'ordertotal'
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
        return scorder::class;
    }
}
