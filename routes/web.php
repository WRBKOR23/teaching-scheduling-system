<?php

use App\Models\AcademicYear;
use App\Models\Account;
use App\Models\DataVersionStudent;
use App\Models\ExamSchedule;
use App\Models\ModuleClass;
use App\Models\Term;
use App\Models\Student;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('test', function ()
{
    //    $old_module_classes    = Cache::get('MHT_special_module_classes') ?? [];
    //    $recent_id_school_year = array_pop($old_module_classes);
    //    $old_module_classes['Xác suất thống kê-2-20 (N06.BT1)'] = 'DSO04.2-2-20 (N06.BT1)';
    //    $old_module_classes['id_study_session'] = '43';
    //    Cache::forever('MHT_special_module_classes', $old_module_classes);

//        Cache::forever('academic_years',
//                       AcademicYear::orderBy('id', 'desc')->limit(18)->pluck('id', 'academic_year')
//                                   ->toArray());
//            $a = SchoolYear::orderBy('id', 'desc')->limit(14)
//                           ->pluck('id', 'school_year')->toArray();
    //        array_shift($a);
    //        array_shift($a);

//            Cache::forever('school_years',$a);
    //    return Cache::get('school_years');

    //    return SchoolYear::whereHas('examSchedules', function ($query)
    //    {
    //        return $query->where('id_student', '191201402');
    //    })->orderBy('id', 'desc')->limit(1)->select('id', 'school_year')->get()->toArray();
//    $a = 'module_score';
//    return DataVersionStudent::pluck($a)->find(['191201402', '191240003']);
//     DataVersionStudent::select($a)->find(['191240003', '191201402'])->pluck($a);
//    DataVersionStudent::find(['191240003', '191201402'])->pluck($a);
//    return DataVersionStudent::where('id_student',  '191201402')
//                             ->select('schedule')->get();
//    return Account::find($id_account)->dataVersionStudent()->pluck($column_name)->first();
//    return ModuleClass::whereIn('id', ['MHT02.3-1-1-21(N25.TH1)', 'MHT02.3-1-1-21(N27)'])
//                      ->pluck('id')
//                      ->toArray();

//    return Student::select('id_account')->find(['191201402', '191240003'])->pluck('id_account')->toArray();

//    var_dump((string) Str::orderedUuid());
//    var_dump((string) Str::orderedUuid());
//    var_dump((string) Str::orderedUuid());
//    var_dump((string) Str::orderedUuid());
//    var_dump((string) Str::orderedUuid());
//    var_dump((string) Str::orderedUuid());
//    var_dump((string) Str::orderedUuid());
    var_dump('94c8f3cd-06cf-48a3-aed3-314bb0f0b677' > '94c8f3cd-04a6-44d1-8dd3-290159e3a497');
});

Route::get('view', function ()
{
    return view('welcome');
});
