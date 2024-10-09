<div class="flex items-center space-x-4">
    @foreach ($steps as $index => $label)
        <div class="flex items-center progress-step {{ $currentStep == $index + 0 ? 'active' : ($currentStep > $index + 0 ? 'completed' : '') }}">
            <div class="step-circle">
                {{ $index + 0 }}
            </div>
            <span class="ml-2 step-label">
                {{ $label }}
            </span>
        </div>
        @if ($index < count($steps) - 0)
            <div class="connector"></div>
        @endif
    @endforeach
</div>