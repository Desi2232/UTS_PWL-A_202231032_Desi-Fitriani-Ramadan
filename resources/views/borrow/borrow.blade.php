@extends('layouts.main')

@section('content')
    {{-- User View --}}
    <div class="p-4">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Riwayat Peminjaman</h2>
        @if ($borrows->isEmpty())
            <div class="bg-yellow-100 text-yellow-800 p-4 rounded-md">
                Tidak ada peminjaman buku saat ini.
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($borrows as $borrow)
                    <div class="bg-white rounded-xl shadow hover:shadow-md transition duration-300">
                        <a href="{{ route('books.show', $borrow->book->slug) }}" class="block p-4">
                            <div class="flex gap-4">
                                <img src="{{ asset('storage/' . $borrow->book->image) }}"
                                    alt="{{ $borrow->book->title }}"
                                    class="h-32 w-24 object-cover rounded-md">
                                <div class="flex flex-col justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-600 font-medium">Judul</h3>
                                        <p class="text-sm text-gray-900">{{ $borrow->book->title }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <h3 class="text-sm text-gray-600 font-medium">Dipinjam</h3>
                                        <p class="text-xs text-white bg-green-500 rounded px-2 py-1 inline-block">
                                            {{ $borrow->created_at->setTimezone('Asia/Jakarta')->format('d M Y') }}
                                        </p>
                                    </div>
                                    <div class="mt-2">
                                        <h3 class="text-sm text-gray-600 font-medium">Dikembalikan</h3>
                                        @if ($borrow->status === 'meminjam')
                                            <p class="text-xs text-white bg-red-500 rounded px-2 py-1 inline-block">
                                                Belum dikembalikan
                                            </p>
                                        @else
                                            <p class="text-xs text-white bg-green-500 rounded px-2 py-1 inline-block">
                                                {{ $borrow->updated_at->setTimezone('Asia/Jakarta')->format('d M Y') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

@section('contentAdmin')
    {{-- Admin View --}}
    <div class="p-4">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Data Peminjaman Buku</h2>

        @if ($borrows->isEmpty())
            <div class="bg-yellow-100 text-yellow-800 p-4 rounded-md">
                Tidak terdapat peminjaman.
            </div>
        @else
            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700 font-semibold">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Kode</th>
                            <th class="px-4 py-3">Judul Buku</th>
                            <th class="px-4 py-3">Peminjam</th>
                            <th class="px-4 py-3">Tgl Pinjam</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($borrows as $borrow)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $borrow->kode_peminjaman }}</td>
                                <td class="px-4 py-3">{{ $borrow->book->title }}</td>
                                <td class="px-4 py-3">{{ $borrow->user->name }}</td>
                                <td class="px-4 py-3">{{ $borrow->created_at->format('d M Y') }}</td>
                                <td class="px-4 py-3">
                                    <form action="{{ route('borrow.update', $borrow->kode_peminjaman) }}" method="POST"
                                        onsubmit="return confirm('Konfirmasi pengembalian buku?')">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="book_id" value="{{ $borrow->book_id }}">
                                        <input type="hidden" name="status" value="dikembalikan">
                                        <button type="submit"
                                            class="px-3 py-1 text-sm rounded bg-red-500 text-white hover:bg-red-600 disabled:bg-gray-300 disabled:text-gray-600 transition"
                                            @if ($borrow->status == 'dikembalikan') disabled @endif>
                                            Kembalikan
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection

