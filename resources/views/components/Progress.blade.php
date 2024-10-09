
<div class="progress-bar flex justify-between items-center my-4">
    @for ($i = 1; $i <= 4; $i++)
        <div class="step flex flex-col items-center">
            <div class="circle {{ $step >= $i ? 'bg-yellow-500' : 'bg-gray-300' }} h-8 w-8 rounded-full flex items-center justify-center text-white">{{ $i }}</div>
            @if ($i < 4)
                <div class="line {{ $step > $i ? 'bg-yellow-500' : 'bg-gray-300' }} h-1 w-24"></div>
            @endif
        </div>
    @endfor
</div>


{{-- reuse progress bar  --}}