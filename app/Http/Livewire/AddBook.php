<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\User;
use App\Models\Book;

class AddBook extends Component
{
    use WithFileUploads;

    public $authors, $title = '', $author = '', $photo;
    protected $listeners = ['imageUpload' => 'upload'];

    public function render()
    {
        $this->authors = User::ofRole('Author')->get();
        return view('livewire.add-book');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|min:2',
            'author' => 'required|numeric'
        ]);
        
        $book = new Book();
        $book->author = $this->author;
        $book->title = $this->title;
        dd($book->toArray());
    }

    public function resetInput()
    {
        $this->data = [];
    }

    public function upload()
    {   
        if(!is_null($this->photo)) {
            dd($this->photo);
        }
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }
}
