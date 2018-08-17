@component('profiles.activities.activity')
    @slot('heading')
        {{ $profileUser->name }} replied to
        <a href="{{ $activity->subject->thread->path() }}">{{ $activity->subject->thread->title }}</a>
    @endslot
    @slot('body')
        {{ $record->subject->body }}
    @endslot
@endcomponent
