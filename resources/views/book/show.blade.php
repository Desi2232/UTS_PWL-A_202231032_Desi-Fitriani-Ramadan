@extends('layouts.main')

@section('content')
<div class="p-4">
    <div class="bg-white rounded-xl shadow-md p-6">
        {{-- Kembali ke daftar buku --}}
        <div class="mb-4">
            <a href="{{ route('books.index') }}" class="inline-flex items-center text-blue-600 hover:underline text-sm font-medium">
                <i data-feather="arrow-left" class="w-4 h-4 mr-1"></i> Kembali ke Daftar Buku
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            {{-- Gambar dan aksi pinjam --}}
            <div class="md:col-span-1 flex flex-col items-center">
                <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-64 object-cover">
                    <class="w-full h-80 object-cover rounded-lg shadow-md">
                
                <p class="mt-4 text-gray-700 font-medium">Jumlah Buku: {{ $book->stok }}</p>

                {{-- Form Peminjaman --}}
                <form action="{{ route('borrow.store') }}" method="POST" class="w-full mt-4">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <input type="hidden" name="kode_peminjaman" value="{{ date('d') . auth()->user()->id . $book->kode_buku }}">
                    <input type="hidden" name="status" value="meminjam">

                    @php
                        $userBorrowing = $book->borrow->where('status', 'meminjam')->where('user_id', auth()->user()->id)->isNotEmpty();
                        $disabled = $book->stok === 0 || $userBorrowing;
                    @endphp

                    <button type="submit"
                        class="w-full px-4 py-3 text-sm font-medium text-white rounded-lg transition
                        bg-blue-600 hover:bg-blue-700 disabled:bg-gray-400 disabled:cursor-not-allowed shadow-md"
                        @if ($disabled) disabled @endif>
                        @if ($book->stok === 0)
                            Stok Habis
                        @elseif ($userBorrowing)
                            Sudah Dipinjam
                        @else
                            Pinjam
                        @endif
                    </button>
                </form>
            </div>

            {{-- Detail Buku --}}
            <div class="md:col-span-3">
                <h1 class="text-2xl font-semibold text-gray-800">{{ $book->title }}</h1>
                <p class="text-gray-600 mt-1">{{ $book->penulis }} - {{ $book->penerbit }}</p>

                {{-- Kategori dan histori pembaca --}}
                <div class="flex items-center mt-4 flex-wrap gap-4">
                    {{-- Histori pembaca --}}
                    @if ($book->histories->isNotEmpty())
                        <div class="flex items-center">
                            @foreach ($book->histories->unique('user_id')->take(5) as $history)
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($history->user->name) }}&background=random"
                                    alt="{{ $history->user->name }}"
                                    class="w-8 h-8 rounded-full border-2 border-white -ml-2 shadow">
                            @endforeach
                            <span class="ml-3 text-sm text-gray-700">
                                {{ $book->histories->count() }} orang telah membaca
                            </span>
                        </div>
                    @endif

                    {{-- Kategori --}}
                    <div class="flex items-center text-sm text-gray-700">
                        <span>Kategori:</span>
                        <a href="{{ route('category.show', $book->category->slug) }}"
                            class="ml-1 underline text-blue-600 hover:text-blue-800">
                            {{ $book->category->name }}
                        </a>
                    </div>
                </div>

                {{-- Deskripsi --}}
                <div class="mt-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $book->description }}</p>
                </div>

                {{-- Info Tambahan --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-600">Kode Buku</h3>
                        <p class="text-gray-800">{{ $book->kode_buku }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-600">Tahun Terbit</h3>
                        <p class="text-gray-800">{{ $book->thn_terbit }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-600">Halaman Buku</h3>
                        <p class="text-gray-800 capitalize">{{ $book->halaman }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
