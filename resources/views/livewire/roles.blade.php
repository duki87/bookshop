<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex space-x-4">
    <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <form class="bg-white px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    New Role Name
                </label>
                <input wire:model="role_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="New Role Name">
            </div>
            <div class="flex items-center justify-between">
                <button wire:click.prevent="store()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Create Role
                </button>
            </div>
            <div class="mb-4 mt-4">
                <strong>About Roles</strong>    
                <hr>
                Every user has a role in system. Based on roles, user have access to some sections.
            </div>
        </form>
    </div>

    <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
        <table class="table-fixed mx-auto px-8 pt-6 pb-8 mb-4">
            <thead>
                <tr>
                    <th class="border w-1/3 px-4 py-2">Role ID</th>
                    <th class="border w-1/3 px-4 py-2">Role Name</th>
                    <th class="border w-1/3 px-4 py-2">No. of Users</th>
                    <th class="border w-1/3 px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($roles as $role)
                <tr>
                    <td class="border w-1/3 px-4 py-2 text-center">{{ $role->id }}</td>
                    <td class="border w-1/3 px-4 py-2">{{ $role->role_name }}</td>
                    <td class="border w-1/3 px-4 py-2 text-center">{{ $role->users->count() }}</td>
                    <td class="border w-1/3 px-4 py-2">
                        <button wire:click="destroy({{ $role->id }})" class="bg-red-300 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="border px-4 py-2" colspan="2">No Roles Yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>