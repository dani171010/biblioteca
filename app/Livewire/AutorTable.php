<?php

namespace App\Livewire;

use App\Models\autor;
use Livewire\Component;
use Livewire\WithPagination;

class AutorTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 5;
    public $sortField = 'name';
    public $sortDirection = 'asc';

    protected $updatesQueryString = ['search', 'page', 'perPage'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function filter()
    {
        // Para el filtrado al presionar la tecla Enter
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function render()
    {
        $autors = autor::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('nacionalidad', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.autor-table',['autors' => $autors]);
    }
}
