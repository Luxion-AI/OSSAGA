@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'animate-pulse bg-zinc-200 dark:bg-zinc-800 rounded-md ' . $class]) }}>
    <span class="sr-only">Loading...</span>
</div>
