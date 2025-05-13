@extends('layouts.main')

@section('contentAdmin')
    <form action="{{ route('books.update', $book->slug) }}" method="POST" class="p-4 w-full" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="bg-white rounded-xl overflow-hidden">
            <div class="p-3 bg-[#2A4759] text-white">
                <a href="/" class="text-sm font-medium flex items-center">
                    <i data-feather="arrow-left" class="w-5 h-5 text-white"></i>
                    <span class="ml-2 text-white">Edit book</span>
                </a>
            </div>
            <div class="w-full p-3">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Judul -->
                    <div>
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                        <input type="text" name="title" id="judul"
                            class="bg-gray-50 border-2 
                            @if($errors->has('slug'))
                                    dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5"
                            placeholder="Judul Buku" required value="{{ $book->title }}">
                        @error('slug')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Penulis -->
                    <div>
                        <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
                        <input type="text" name="penulis" id="penulis"
                            class="bg-gray-50 border-2 
                            @if($errors->has('penulis'))
                                    dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5"
                            placeholder="Nama Penulis" required value="{{ $book->penulis }}">
                        @error('penulis')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Penerbit -->
                    <div>
                        <label for="penerbit" class="block mb-2 text-sm font-medium text-gray-900">Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit"
                            class="bg-gray-50 border-2 
                            @if($errors->has('penerbit'))
                                    dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5"
                            placeholder="Nama Penerbit" required value="{{ $book->penerbit }}">
                        @error('penerbit')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Jumlah Buku -->
                    <div>
                        <label for="stok" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Buku</label>
                        <input type="text" name="stok" id="stok"
                            class="bg-gray-50 border-2 
                            @if($errors->has('stok'))
                                    dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5"
                            placeholder="Jumlah Buku" required value="{{ $book->stok }}">
                        @error('stok')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Jumlah Halaman -->
                    <div>
                        <label for="halaman" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Halaman</label>
                        <input type="text" name="halaman" id="halaman"
                            class="bg-gray-50 border-2 
                            @if($errors->has('halaman'))
                                    dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5"
                            placeholder="Jumlah Halaman" required value="{{ $book->halaman }}">
                        @error('halaman')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Category -->
                    <div>
                        <label for="Category_id" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                        <select name="category_id" id="category"
                            class="w-full bg-gray-50 border-2 
                            @if($errors->has('category_id'))
                                    dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif 
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if ($category->id == $book->category_id) @selected(true) @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Tahun Terbit -->
                    <div>
                        <label for="thn_terbit" class="block mb-2 text-sm font-medium text-gray-900">Tahun Terbit</label>
                        <input type="date" name="thn_terbit" id="thn_terbit"
                            class="bg-gray-50 border-2 
                            @if($errors->has('thn_terbit'))
                                    dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5"
                            placeholder="Tahun Terbit" required value="{{ $book->thn_terbit }}">
                        @error('thn_terbit')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Kode Buku -->
                    <div>
                        <label for="kode_buku" class="block mb-2 text-sm font-medium text-gray-900">Kode Buku</label>
                        <input type="text" name="kode_buku" id="kodebuku"
                            class="mb-2 bg-gray-50 border-2 
                            @if($errors->has('kode_buku'))
                                dark:border-rose-500
                            @else
                                dark:border-gray-300
                            @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5"
                            placeholder="049472872" required value="{{ $book->kode_buku }}">
                        @error('kode_buku')
                                <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                    {{ $message }}
                                </p>
                        @enderror
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-span-2">
                        <label for="desc" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea name="description" id="desc" cols="30" rows="7"
                            class="bg-gray-50 border-2 
                            @if($errors->has('description'))
                                dark:border-rose-500
                            @else
                                dark:border-gray-300
                             @endif
                            text-gray-900 sm:text-sm rounded-lg focus:outline-none focus:ring-offset-1 focus:ring-2 focus:ring-blue-500 focus:border-white block w-full p-2.5">{{ $book->description }}</textarea>
                        @error('description')
                            <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <!-- Choose profile photo -->
                    <div class="col-span-2">
                        <label class="block">
                            <span class="sr-only">Choose profile photo</span>
                            <input type="file"
                                class="block w-full text-sm text-slate-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-gray-50 file:text-blue-500
                                  hover:file:bg-[#9EBC8A]"
                                onchange="showPreview(event)" name="image" />
                            @error('image')
                                <p class="mt-1 text-left text-sm text-red-600 mb-0">
                                    {{ $message }}
                                </p>
                            @enderror
                        <img id="file-ip-1-preview" class="rounded-lg mt-3" src="{{ asset('storage/' . $book->image) }}">
                    </label>
                </div>
                <!-- Tombol Submit -->
                 <div class="col-span-2">
                <button class="transition-all duration-500 bg-[#2A4759] rounded-lg text-white font-medium px-5 py-2.5 focus:ring-2
                    focus:ring-blue-500 focus:ring-offset-2 text-center hover:bg-[#27548A] text-sm mt-3">Submit</button>
            </div>
        </div>
    </form>
@endsection