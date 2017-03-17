<?php namespace Stagesolutions\Bargeld\Models;

use Model;

/**
 * Model
 */
class Receipts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stagesolutions_bargeld_receipts';
}