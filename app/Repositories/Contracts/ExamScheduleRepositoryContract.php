<?php

namespace App\Repositories\Contracts;

interface ExamScheduleRepositoryContract
{
    public function upsertMultiple ($exam_schedules);

    public function insertPivot ($id_module_class, $id_teachers);

    public function findAllByIdTeacher ($id_teacher, $id_study_sessions);

    public function findAllByIdTeachers ($id_teachers, $id_study_sessions);

    public function update ($new_exam_schedule);
}