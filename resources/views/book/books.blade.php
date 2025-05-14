@extends('layouts.main')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-5 border-b pb-2">Library Collection</h1>

        @if ($books->isEmpty())
            <p class="text-sm text-gray-600">Tidak terdapat buku</p>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($books as $book)
                @php $dipinjam = false; @endphp
                @foreach ($book->borrow as $borrow)
                    @if ($borrow->user_id == auth()->user()->id && $borrow->status == 'meminjam')
                        @php $dipinjam = true; @endphp
                        @break
                    @endif
                @endforeach

                <a href="{{ route('books.show', $book->slug) }}"
                   class="group transition transform hover:scale-95 duration-300 relative bg-white shadow hover:shadow-lg rounded-md overflow-hidden">
                    <div class="absolute top-3 left-3 px-3 py-1 rounded text-xs font-medium
                        {{ $dipinjam ? 'bg-gray-800 text-white' : ($book->stok == 0 ? 'bg-red-600 text-white' : 'bg-green-500 text-white') }}">
                        {{ $dipinjam ? 'Dipinjam' : ($book->stok == 0 ? 'Tidak Tersedia' : 'Tersedia') }}
                    </div>
                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 truncate" title="{{ $book->title }}">{{ $book->title }}</h2>
                        <div class="mt-3 space-y-1 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <i data-feather="edit-3" class="w-4 h-4"></i>
                                <span>{{ $book->penulis }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-feather="calendar" class="w-4 h-4"></i>
                                <span>{{ $book->thn_terbit }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-feather="layers" class="w-4 h-4"></i>
                                <span>{{ $book->halaman }} Pages</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

@section('contentAdmin')
    <div class="p-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-5 border-b pb-2">Data Buku</h1>
            <a href="{{ route('books.create') }}" class="bg-[#2A4759] hover:bg-[#27548A] text-white px-4 py-2 rounded text-sm font-semibold">
                Tambah Buku
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 bg-white shadow rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">#</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Judul Buku</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Penulis</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Penerbit</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Kategori</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Jumlah</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($books as $book)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900 font-medium">{{ $book->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->penulis }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->penerbit }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->category->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->stok }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <a href="{{ route('books.edit', $book->slug) }}"
                                   class="inline-flex items-center gap-1 px-3 py-1.5 text-sm bg-yellow-400 hover:bg-yellow-500 text-white rounded">
                                    <i data-feather="edit-3" class="w-4 h-4"></i> Edit
                                </a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')"
                                            class="inline-flex items-center gap-1 px-3 py-1.5 text-sm bg-red-500 hover:bg-red-700 text-white rounded">
                                        <i data-feather="trash-2" class="w-4 h-4"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5 text-sm text-gray-600">Tidak terdapat buku</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
@endpush
