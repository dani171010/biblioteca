<?php

namespace App\Livewire;

use App\Models\prestamo;
use Livewire\Component;
use Livewire\WithPagination;

class PrestamoTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 6;
    public $sortField = 'id';
    public $sortAsc = true;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage',
        'sortField',
        'sortAsc'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
    public function filter()
    {
        // Este método no necesita hacer nada explícito ya que el render se encargará del filtrado
    }

    public function render()
    {
        $prestamos = prestamo::with(['usuario'])
        ->where('id', 'like', '%' . $this->search . '%')
      
        ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
        ->paginate($this->perPage);
        return view('livewire.prestamo-table',['prestamos' => $prestamos]);
    }
}
