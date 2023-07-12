@extends('layouts.index')
@section('content')
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-2" style="text-decoration: underline">Tambah Data Pelanggan</h1>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 my-6 pr-0 lg:pr-2">
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="/store-customer">
                            @csrf
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="name">Nama Pelanggan </label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="name"
                                    name="name" type="text" required placeholder="Nama Pelanggan " aria-label="name">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="email">Nomor Handphone </label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="phone"
                                    name="phone" required type="number" placeholder="Nomor Handphone" aria-label="phone">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="email">Alamat </label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="address"
                                    name="address" required type="text" placeholder="Alamat" aria-label="address">
                            </div>
                            <div class="mt-6">
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </main>
    </div>
@endsection
