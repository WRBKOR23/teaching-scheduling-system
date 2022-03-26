<?php

namespace App\Services\Contracts;

interface DepartmentServiceContract
{
    public function getSchedulesByDate ($id_department, $start, $end);

    public function getExamSchedulesByDate ($id_department, $start, $end);

    public function getFixedSchedules ($id_department, array $conditions);

    public function getModuleClassesByStudySessions ($id_department, $term, $study_sessions);

    public function getTeachers ($id_department);

    public function destroyModuleClassesByStudySession (string $idDepartment,
                                                        string $studySession);
}