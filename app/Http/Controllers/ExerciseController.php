<?php

namespace App\Http\Controllers;

use App\Services\GymApiService;
use Illuminate\Support\Arr;

class ExerciseController extends Controller
{
    private $gymApi;
    public function __construct(GymApiService $gymApi) {
        $this->gymApi = $gymApi;
    }

    public function register() {
        $groups = $this->gymApi->getMuscleGroups();
        return view('create-exercise', ['muscleGroups' => $groups]);
    }
}
