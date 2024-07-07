<?php

namespace App\Livewire;

use App\Models\usuario;
use Livewire\Component;
use Livewire\WithPagination;


class UsuarioTable extends Component
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
        $usuarios = usuario::query()
            ->where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('apellido', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('telefono', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.usuario-table', ['usuarios' => $usuarios]);
    }


}
