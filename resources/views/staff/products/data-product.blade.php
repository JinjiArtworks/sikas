@extends('layouts.index')
@section('content')
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-5" style="text-decoration: underline">Data Produk</h1>
            <!-- This is an example component -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
                <div class="p-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1 flex">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items">
                    </div>

                </div>

                <a href="/create-product" class="hover:text-blue-500">
                    <p class="text-md pb-3 flex items-center ml-5 text-green-700 underline">
                        <i class="fa fa-plus mr-3 text-green-700"></i> Tambah Data Produk
                    </p>
                </a>
                @if (session('success'))
                    <div class="alert alert-success">
                        <div id="toast-success"
                            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                            role="alert">
                            <div
                                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="sr-only">Check icon</span>
                            </div>
                            <div class="ml-3 text-sm font-normal">Data Berhasil Diubah</div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                data-dismiss-target="#toast-success" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @elseif (session('deleted'))
                    <div class="alert alert-success">
                        <div id="toast-success"
                            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                            role="alert">
                            <div
                                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="sr-only">Check icon</span>
                            </div>
                            <div class="ml-3 text-sm font-normal">Data Berhasil Dihapus</div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                data-dismiss-target="#toast-success" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endif
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                            <th scope="col" class="px-6 py-3">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    <img src="{{ asset('img/' . $item->image) }}" width="150px" alt="">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->description }}
                                </td>
                                <td class="px-6 py-4">
                                    @currency($item->price)

                                </td>
                                <form action="{{ route('staff.edit', ['id' => $item->id]) }}">
                                    <td class="px-6 py-4">
                                        <div class="w-5 transform hover:text-blue-500 hover:scale-110">
                                            <button type="submit"
                                                class=" font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                Ubah
                                            </button>
                                        </div>
                                    </td>
                                </form>
                                <form method="GET" action="{{ route('staff.delete', ['id' => $item->id]) }}">
                                    <td class="px-6 py-4">
                                        <div class="w-5 transform hover:text-blue-500 hover:scale-110 ">
                                            <button type="submit"
                                                class="confirm font-medium text-red-600 dark:text-red-500 hover:underline">
                                                Hapus
                                            </button>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class=" mt-20">

                <div class="bg-white overflow-auto">
                    <h1 class="text-3xl text-black pb-6">Dafar Produk</h1>
                    <div class="flex flex-wrap">
                        <div class="row m-2">
                            <div class="flex flex-col shadow-md cursor-pointer w-96">
                                <div class="inline relative h-56">
                                    <img class="absolute rounded-t object-cover h-full w-full"
                                        src="https://images.unsplash.com/photo-1627384113858-ce93ff568d1f?auto=format&fit=crop&w=1170&q=80"
                                        alt="Product Preview" />
                                </div>
                                <!-- Body -->
                                <div class="flex flex-col bg-white rounded-b p-3">
                                    <!-- Title -->
                                    <div class="text-sm font-semibold text-gray-900 hover:underline ">
                                        Awesome Fantastic Super Uber Harika Merveilleux Pro Ultra Max Plus Plus Makeup Stuff
                                    </div>
                                    <!-- Author - Category -->
                                    <div class="text-xxs text-gray-400  mt-1">
                                        <p class="font-semibold hover:underline"> Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Modi consequuntur velit ducimus recusandae, quis praesentium
                                            sequi dicta, accusamus non voluptates est ullam alias reiciendis! Nihil
                                            molestias quia amet odit veritatis. </p>
                                    </div>
                                    <div class="flex flex-row mt-2">
                                        <div class="text-sm text-gray-600 font-bold mt-4 mb-1">
                                            Rp. 100.000
                                        </div>
                                        <div class="flex flex-row flex-auto justify-end">
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 mr-2 border-amber-500 group rounded-xss">
                                                <i class="mdi mdi-cart-outline text-amber-700">Edit</i>
                                            </a>
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 group rounded-xss transition-all duration-200">
                                                <i class="mdi mdi-eye-outline text-amber-700"></i>
                                                <div class="text-xxs text-amber-700 font-semibold ml-2">
                                                    Live Preview
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="flex flex-col shadow-md cursor-pointer w-96">
                                <div class="inline relative h-56">
                                    <img class="absolute rounded-t object-cover h-full w-full"
                                        src="https://images.unsplash.com/photo-1627384113858-ce93ff568d1f?auto=format&fit=crop&w=1170&q=80"
                                        alt="Product Preview" />
                                </div>
                                <!-- Body -->
                                <div class="flex flex-col bg-white rounded-b p-3">
                                    <!-- Title -->
                                    <div class="text-sm font-semibold text-gray-900 hover:underline ">
                                        Awesome Fantastic Super Uber Harika Merveilleux Pro Ultra Max Plus Plus Makeup Stuff
                                    </div>
                                    <!-- Author - Category -->
                                    <div class="text-xxs text-gray-400  mt-1">
                                        <p class="font-semibold hover:underline"> Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Modi consequuntur velit ducimus recusandae, quis praesentium
                                            sequi dicta, accusamus non voluptates est ullam alias reiciendis! Nihil
                                            molestias quia amet odit veritatis. </p>
                                    </div>
                                    <div class="flex flex-row mt-2">
                                        <div class="text-sm text-gray-600 font-bold mt-4 mb-1">
                                            Rp. 100.000
                                        </div>
                                        <div class="flex flex-row flex-auto justify-end">
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 mr-2 border-amber-500 group rounded-xss">
                                                <i class="mdi mdi-cart-outline text-amber-700">Edit</i>
                                            </a>
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 group rounded-xss transition-all duration-200">
                                                <i class="mdi mdi-eye-outline text-amber-700"></i>
                                                <div class="text-xxs text-amber-700 font-semibold ml-2">
                                                    Live Preview
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  <div class="row m-2">
                            <div class="flex flex-col shadow-md cursor-pointer w-96">
                                <div class="inline relative h-56">
                                    <img class="absolute rounded-t object-cover h-full w-full"
                                        src="https://images.unsplash.com/photo-1627384113858-ce93ff568d1f?auto=format&fit=crop&w=1170&q=80"
                                        alt="Product Preview" />
                                </div>
                                <!-- Body -->
                                <div class="flex flex-col bg-white rounded-b p-3">
                                    <!-- Title -->
                                    <div class="text-sm font-semibold text-gray-900 hover:underline ">
                                        Awesome Fantastic Super Uber Harika Merveilleux Pro Ultra Max Plus Plus Makeup Stuff
                                    </div>
                                    <!-- Author - Category -->
                                    <div class="text-xxs text-gray-400  mt-1">
                                        <p class="font-semibold hover:underline"> Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Modi consequuntur velit ducimus recusandae, quis praesentium
                                            sequi dicta, accusamus non voluptates est ullam alias reiciendis! Nihil
                                            molestias quia amet odit veritatis. </p>
                                    </div>
                                    <div class="flex flex-row mt-2">
                                        <div class="text-sm text-gray-600 font-bold mt-4 mb-1">
                                            Rp. 100.000
                                        </div>
                                        <div class="flex flex-row flex-auto justify-end">
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 mr-2 border-amber-500 group rounded-xss">
                                                <i class="mdi mdi-cart-outline text-amber-700">Edit</i>
                                            </a>
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 group rounded-xss transition-all duration-200">
                                                <i class="mdi mdi-eye-outline text-amber-700"></i>
                                                <div class="text-xxs text-amber-700 font-semibold ml-2">
                                                    Live Preview
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  <div class="row m-2">
                            <div class="flex flex-col shadow-md cursor-pointer w-96">
                                <div class="inline relative h-56">
                                    <img class="absolute rounded-t object-cover h-full w-full"
                                        src="https://images.unsplash.com/photo-1627384113858-ce93ff568d1f?auto=format&fit=crop&w=1170&q=80"
                                        alt="Product Preview" />
                                </div>
                                <!-- Body -->
                                <div class="flex flex-col bg-white rounded-b p-3">
                                    <!-- Title -->
                                    <div class="text-sm font-semibold text-gray-900 hover:underline ">
                                        Awesome Fantastic Super Uber Harika Merveilleux Pro Ultra Max Plus Plus Makeup Stuff
                                    </div>
                                    <!-- Author - Category -->
                                    <div class="text-xxs text-gray-400  mt-1">
                                        <p class="font-semibold hover:underline"> Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Modi consequuntur velit ducimus recusandae, quis praesentium
                                            sequi dicta, accusamus non voluptates est ullam alias reiciendis! Nihil
                                            molestias quia amet odit veritatis. </p>
                                    </div>
                                    <div class="flex flex-row mt-2">
                                        <div class="text-sm text-gray-600 font-bold mt-4 mb-1">
                                            Rp. 100.000
                                        </div>
                                        <div class="flex flex-row flex-auto justify-end">
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 mr-2 border-amber-500 group rounded-xss">
                                                <i class="mdi mdi-cart-outline text-amber-700">Edit</i>
                                            </a>
                                            <a
                                                class="flex text-xs border px-3 my-auto py-2 group rounded-xss transition-all duration-200">
                                                <i class="mdi mdi-eye-outline text-amber-700"></i>
                                                <div class="text-xxs text-amber-700 font-semibold ml-2">
                                                    Live Preview
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}
        </main>

    </div>
@endsection
