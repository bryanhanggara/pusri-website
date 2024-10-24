<div class="row">
    <div class="col-12">
        <div class="card">
            
            <div class="card-header">
                <a href="{{route('news.create')}}" class="btn btn-primary">
                    Add Berita
                </a>
            </div>
            
            <div class="card-body">
                
                    <input class="form-control"
                    name="name"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                    data-width="250"
                    wire:model.live="search">
                <br>
                <div class="table-responsive">
                    <table class="table-striped table"
                        id="table-1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Cover</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                            
                            @forelse ($news as $item)
                            <tr>
                                 <td>{{$item->title}}</td>
                                 <td>{{$item->description}}</td>
                                 <td>
                                    <a href="{{ asset('storage/' . $item->image) }}">
                                        <img src="{{ asset('storage/' . $item->image) }}" width="100%" height="200" class="p-3"></img>
                                    </a>
                                 </td>
                                
                                 <td>
                                    {{-- <a href="{{route('agenda.show', $item->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                                    <a href="{{route('news.edit', $item->id)}}" class="btn btn-warning"><i class="fa fa-pen"></i></a>
                                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('destroyForm').submit();"><i class="fa fa-trash"></i></a>
                                    <form id="destroyForm" action="{{ route('news.destroy', $item->id) }}" method="post" style="display: none;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"></button>
                                    </form>
                                 </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $news->links('vendor.pagination.bootstrap-5') }}
                </div>
               
            </div>
        </div>
    </div>
</div>