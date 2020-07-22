@php
/**
 * @var \App\Exercise $exercise
 * @var \App\Solution $solution
 * @var \App\User $authUser
 */
@endphp
<div>
    {!! Form::open()->route('users.solutions.store', [$authUser]) !!}
    {!! Form::textarea('content')->placeholder(__('solution.placeholder'))->attrs(['rows' => 10])->required() !!}
    {!! Form::hidden('exercise_id', $exercise->id) !!}
    <div class="d-flex justify-content-end">
        {!! Form::submit(__('solution.save'), 'primary') !!}
    </div>
    {!! Form::close() !!}
</div>
