<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModuleClass extends Model
{
    use HasFactory, Filterable;

    public const table = 'module_classes';
    public const table_as = 'module_classes as mcs';

    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'type',
        'number_plan',
        'number_reality',
        'is_international',
        'id_study_session',
        'id_module',
        'id_teacher',
        'deleted_at',
    ];

    protected $hidden = [
        'pivot'
    ];

    private array $filterable = [
        'id_study_session',
    ];

    private array $sortable = [];

    public function studySession () : BelongsTo
    {
        return $this->belongsTo(StudySession::class, 'id_study_session', 'id');
    }

    public function module () : BelongsTo
    {
        return $this->belongsTo(Module::class, 'id_module', 'id');
    }

    public function teacher () : BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'id_teacher', 'id');
    }

    public function schedules () : HasMany
    {
        return $this->hasMany(Schedule::class, 'id_module_class', 'id');
    }

    public function students () : BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'module_class-student', 'id_module_class',
                                    'id_student');
    }

    public function examSchedule () : HasOne
    {
        return $this->hasOne(ExamSchedule::class, 'id_module_class', 'id');
    }
}
