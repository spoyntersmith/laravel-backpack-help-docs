<div wire:ignore.self class="modal text-dark" tabindex="-1" role="dialog" id="help-docs-modal">
    <div wire:ignore.self class="modal-dialog modal-dialog-scrollable" role="document">
        <div wire:ignore.self class="modal-content">
            <div class="modal-header">

                {{--                Search field --}}
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Search help docs</span>
                    </div>
                    <input wire:model.debounce="search"
                           type="text"
                           class="form-control"
                           id="help-docs-search"
                           aria-label="Search help docs"
                           aria-describedby="inputGroup-sizing-default">
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--                Help docs list --}}
                <div class="list-group" id="help-docs-list">
                    @forelse($helpDocs as $helpDoc)
                        <a href="{{backpack_url('help-doc/'.$helpDoc->id.'/show')}}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$helpDoc->name}}</h5>
                                <small>{!! $helpDoc->content !!}</small>
                            </div>
                        </a>
                    @empty
                        @if($search ?? '')
                            <div class="list-group-item list-group-item-action">
                                No results found for '{{$search}}'
                            </div>
                        @endif

                        @if(!$search)
                            <div class="list-group-item list-group-item-action">
                                Search for help docs
                            </div>
                        @endif
                    @endforelse
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between align-items-start">
                @if($helpDocs?->count() > 0)
                    {{$helpDocs->links()}}
                @endif
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@once
    @push('after_scripts')
        @livewireScripts
    @endpush
@endonce