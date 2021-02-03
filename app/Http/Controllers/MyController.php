<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\User;
use Auth;
use Illuminate\View\View;

class MyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(): View
    {
        /** @var User $user */
        $user = Auth::user();
        $user->load('readChapters', 'completedExercises');

        $chapters = Chapter::with('children', 'exercises')->get();
        $mainChapters = $chapters->where('parent_id', null);
        $completedExercises = $user->completedExercises->keyBy('exercise_id');
        $savedSolutionsExercises = $user->solutions()
            ->versioned()
            ->with([
                'exercise',
                'exercise.chapter',
            ])
            ->paginate(10);

        return view('my.index', compact(
            'user',
            'chapters',
            'mainChapters',
            'completedExercises',
            'savedSolutionsExercises'
        ));
    }
}
