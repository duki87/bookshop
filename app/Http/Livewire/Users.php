<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users, $name;

    public function render()
    {
        $this->users = User::with('role')->get();
        return view('livewire.users');
    }

    private function resetInput()
    {
        $this->name = null;
    }

    public function store()
    {
        // $this->validate([
        //     'role_name' => 'required|min:2'
        // ]);
        // $role = new User();
        // $role->role_name = $this->role_name;
        // $role->save();
        // $this->resetInput();
    }

    public function destroy($id)
    {
        // $role = Role::where('id', $role)->first();
        // $role->delete();
        // session()->flash('message', 'Role '.$role->role_name.' Deleted Successfully.');
    }
}
