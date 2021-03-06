<?php

namespace Arane\Base\Models\Entities;

use Arane\Base\Models\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserSetting.
 *
 * @package namespace Arane\Base\Models\Entities;
 */
class SystemSetting extends Model {
    use ModelTrait;

    protected $table = "system_settings";

    protected $casts = [];

    protected $attributes = [];
    
    protected $shown = ['id'];
    
    public function getShownAttribute(){
        return $this->shown;
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot() {
        parent::boot();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];


}
