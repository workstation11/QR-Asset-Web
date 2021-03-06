<?php

namespace App\Repositories;

use App\Models\Vendor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VendorRepository
 * @package App\Repositories
 * @version November 24, 2018, 5:56 pm UTC
 *
 * @method Vendor findWithoutFail($id, $columns = ['*'])
 * @method Vendor find($id, $columns = ['*'])
 * @method Vendor first($columns = ['*'])
*/
class VendorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_registrasi',
        'nama',
        'alamat',
        'kota',
        'fax',
        'email',
        'attn',
        'telepon',
        'phone'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vendor::class;
    }
}
