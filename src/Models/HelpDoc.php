<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spoyntersmith\LaravelBackpackHelpDocs\Database\Factories\HelpDocFactory;

class HelpDoc extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'backpack_help_docs';

    protected static function newFactory()
    {
        return HelpDocFactory::new();
    }

    public function scopeRelative($query)
    {
        return $query;
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::saving(function ($helpDoc) {
            $helpDoc->plain_content = strip_tags($helpDoc->content);
        });
    }
}
