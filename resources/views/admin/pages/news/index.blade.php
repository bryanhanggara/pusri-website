@extends('layouts.app')

@section('title','Agenda Pusri - admin')
@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Books</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Agenda

                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-header">
                            <a href="" class="btn btn-primary">
                                Add Agenda
                            </a>
                        </div>
                        
                        <div class="card-body">
                            <form action="" method="get">
                                @csrf
                                <input class="form-control"
                                name="name"
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                                data-width="250">
                            <button class="btn"
                                type="submit"></button>
                            </form>
                            <div class="table-responsive">
                                <table class="table-striped table"
                                    id="table-1">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Waktu Agenda</th>
                                            <th>Deskripsi</th>
                                            <th>Cover</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                        
                                        @forelse ($agendas as $item)
                                        <tr>
                                             <td>{{$item->title}}</td>
                                             <td>{{$item->agenda_date}}</td>
                                             
                                             <td>{{$item->description}}</td>
                                             <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" width="100%" height="200"></img>
                                                <a href="{{ asset('storage/' . $item->image) }}">Open PDF</a>
                                             </td>
                                            
                                             <td>
                                                {{-- <a href="{{route('books.show', $item->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('books.edit', $item->id)}}" class="btn btn-warning"><i class="fa fa-pen"></i></a>
                                                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('destroyForm').submit();"><i class="fa fa-trash"></i></a>
                                                <form id="destroyForm" action="{{ route('books.destroy', $item->id) }}" method="post" style="display: none;">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"></button>
                                                </form> --}}
                                             </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="12" class="text-center">Data Kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush