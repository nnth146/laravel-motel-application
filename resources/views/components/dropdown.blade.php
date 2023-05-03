@props(['trigger', 'content'])

<div class="relative cursor-pointer" id="dropdown" x-data="{ open: false }" @click="open = ! open">
    <div class="flex items-center gap-2">
        {{ $trigger }}
    </div>
    <template x-if="true">
        <div class="absolute right-0 z-10 mt-3 min-w-[200px] max-w-[300px] bg-white rounded-md border-[1px] border-solid border-gray-100 shadow"
            id="dropdown-content" @click.outside="open = ! open" x-show="open">
            {{ $content }}
        </div>
    </template>
</div>