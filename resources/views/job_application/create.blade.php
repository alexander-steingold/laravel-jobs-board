<x-layout>
    <x-breadcrumbs class="mb-4" :links="[
     'Jobs' => route('jobs.index'),
     $job->title => route('jobs.show', $job),
     'Apply' => '#'
     ]"/>

    <x-job-card :job="$job"/>
    <x-card>
        <h2 class="mb-4 font-medium text-lg">
            Your Job Application
        </h2>
        <form action="{{ route('job.application.store', $job) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="expected_salary" class="mb-2 block text-sm font-medium text-slate-900">Expected
                    Salary</label>
                <x-text-input name="expected_salary" type="number"/>
            </div>
            <div class="mb-4">
                <label for="expected_salary" class="mb-2 block text-sm font-medium text-slate-900">Upload CV</label>
                <x-text-input name="cv" type="file"/>
            </div>
            <x-button class="w-full">Apply</x-button>
        </form>
    </x-card>

</x-layout>
