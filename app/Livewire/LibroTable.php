<?php

namespace App\Livewire;

use App\Models\libro;
use Livewire\Component;
use Livewire\WithPagination;

class LibroTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 5;
    public $sortField = 'titulo';
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
        $libros = libro::query()
            ->where('titulo', 'like', '%' . $this->search . '%')
            ->orWhere('paginas', 'like', '%' . $this->search . '%')
            ->orWhereHas('autor', function($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('editorial', function($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.libro-table',['libros'=>$libros]);
    }
}
