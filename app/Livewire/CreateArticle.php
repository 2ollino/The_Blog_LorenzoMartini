<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    use WithFileUploads;

    #[Validate('required|unique:articles|min:5')]
    public $title;
    #[Validate('required|min:100')]
    public $body ;
    #[Validate('required|min:5')]
    public $subtitle ;
    #[Validate('required|image|mimes:jpeg,png,jpg,gif,svg|max:2048')]
    public $image ;
    #[Validate('required')]
    public $category ;



    public function store()
    {
        $this->validate();

        $imagePath = $this->image->store('images', 'public');

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'image' => $imagePath,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);

        session()->flash('message', 'Articolo creato con successo.');

        return redirect()->route('homepage');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
