<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsTable extends Component
{
    use WithPagination;
    public $search ='';

    public function render()
    {
        $news = News::where('title', 'like', '%' . $this->search . '%')->paginate(5);
        
        return view('livewire.news-table', [
            'news' => $news,
        ]);
    }
}

