<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Agenda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $agendas = Agenda::take(3)->get();
        $news = News::take(3)->get();

        return view('welcome', compact('agendas','news'));
    }

    public function listAgenda(){
        $agendas = Agenda::all();
        return view('pages.agenda.list', compact('agendas'));
    }

    public function listNews(){
        $news = News::all();
        return view('pages.news.list', compact('news'));
    }

    public function agendaDetail($slug){
        $agenda = Agenda::where('slug', $slug)->firstOrFail();
        return view('pages.agenda.detail', compact('agenda'));
    }

    public function newsDetail($slug){
        $news = News::where('slug', $slug)->firstOrFail();
        return view('pages.news.detail', compact('news'));
    }
}
