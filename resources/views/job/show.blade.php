<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']" />
    <x-job-card :job="$job">
        <p class="text-sm mb-4 text-slate-500">{!! nl2br(e($job->description)) !!}</p>

    </x-job-card>
</x-layout>