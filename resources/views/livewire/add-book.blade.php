<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4"> 
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            
                <div class="px-2 overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <label class="block">
                    <span class="text-gray-700">Book Title</span>
                    <input wire:model="title" class="form-input mt-1 block w-full" placeholder="Enter Book Title">
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                  </label>

                  <label class="block mt-4">
                    <span class="text-gray-700">Author</span>
                    <select class="form-select mt-1 block w-full" wire:model="author">
                      @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                      @endforeach
                    </select>
                  </label>

                  <div class="flex mt-4">
                    <div class="flex-1 mr-2">
                      <label class="block">
                        <span class="text-gray-700">Original Cost</span>
                        <input type="number" step="0.1" min="0" wire:model="original_cost" class="form-input mt-1 block w-full" placeholder="Enter Original Price">
                      </label>
                    </div>
                    <div class="flex-1 mr-2">
                      <label class="block">
                        <span class="text-gray-700">Price</span>
                        <input wire:model="title" class="form-input mt-1 block w-full" placeholder="Enter Book Title">
                      </label>
                    </div>
                    <div class="flex-1">
                      <label class="block">
                        <span class="text-gray-700">Price</span>
                        <input wire:model="price" class="form-input mt-1 block w-full" placeholder="Enter Book Title">
                      </label>
                    </div>
                  </div>

                  <div class="flex text-gray-600 mt-4">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload cover image</span>
                      <input wire:model="photo" id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                  @if ($photo)
                      Photo Preview:
                      <img src="{{ $photo->temporaryUrl() }}">
                  @endif
                  {{--
                  <div class="mt-4">
                    <span class="text-gray-700">Account Type</span>
                    <div class="mt-2">
                      <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="personal">
                        <span class="ml-2">Personal</span>
                      </label>
                      <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="accountType" value="busines">
                        <span class="ml-2">Business</span>
                      </label>
                    </div>
                  </div>

                  <div class="flex mt-6">
                    <label class="flex items-center">
                      <input type="checkbox" class="form-checkbox">
                      <span class="ml-2">I agree to the <span class="underline">privacy policy</span></span>
                    </label>
                  </div>
                  --}}

                  <div class="flex mt-6">
                      <button wire:click.prevent="store()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                          Add Book
                      </button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>