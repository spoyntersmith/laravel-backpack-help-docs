{{-- fixed bottom right button to display help docs --}}
<div>
    @once
        @push('after_scripts')
            @livewire('help-docs-modal')
        @endpush
    @endonce

    <button class="btn btn-primary position-fixed d-flex align-items-center justify-content-center"
            style="bottom: 10px; right:10px; z-index: 9999;"
            data-toggle="modal"
            data-target="#help-docs-modal">
        <i class="las la-question"></i>
        <span class="d-none d-md-block">Help docs</span>
    </button>
</div>