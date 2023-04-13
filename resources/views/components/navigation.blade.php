@props(['left', 'right'])

<nav class="h-16">
    <div class="flex h-full items-center justify-between px-4">
        {{ $left ?? null}}
        {{ $right ?? null }}
    </div>
</nav>
