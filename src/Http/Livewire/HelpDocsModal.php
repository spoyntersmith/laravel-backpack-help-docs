<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spoyntersmith\LaravelBackpackHelpDocs\Models\HelpDoc;

class HelpDocsModal extends Component
{
    use WithPagination;

    public string $search = '';

    protected $results;

    protected $paginationTheme = 'bootstrap';

    public function updatedSearch($value)
    {
        if ($value) {
            $helpDocs = HelpDoc::where('name', 'like', '%'.$value.'%')
                ->orWhere('content', 'like', '%'.$value.'%');
        } else {
            $helpDocs = HelpDoc::relative();
        }
        $this->results = $helpDocs;
    }

    public function render()
    {
        return view('laravel-backpack-help-docs::search-help-docs', [
                'helpDocs' => $this?->results?->paginate(7) ??
                    HelpDoc::relative()->paginate(7),
            ]);
    }
}
