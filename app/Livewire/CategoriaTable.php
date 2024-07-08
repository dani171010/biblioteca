<?php

namespace App\Livewire;

use App\Models\categoria;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriaTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 5;
    public $sortField = 'nombre';
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
        $categorias = categoria::query()
            ->where('nombre', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.categoria-table',['categorias' => $categorias]);
    }
}
