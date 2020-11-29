<?php

namespace App\Http\Livewire;
use App\Models\Role;

use Livewire\Component;

class Roles extends Component
{
    public $roles, $role_name;

    public function render()
    {
        $this->roles = Role::get();
        return view('livewire.roles');
    }

    private function resetInput()
    {
        $this->role_name = null;
    }

    public function store()
    {
        $this->validate([
            'role_name' => 'required|min:2'
        ]);
        $role = new Role();
        $role->role_name = $this->role_name;
        $role->save();
        $this->resetInput();
    }

    public function destroy($id)
    {
        $role = Role::where('id', $id)->first();
        $role->delete();
        session()->flash('message', 'Role '.$role->role_name.' Deleted Successfully.');
    }
}
