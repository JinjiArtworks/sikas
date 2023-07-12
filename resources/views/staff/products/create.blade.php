@extends('layouts.index')
@section('content')
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-2" style="text-decoration: underline">Tambah Produk</h1>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 my-6 pr-0 lg:pr-2">
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" method="POST" action="/store-product" enctype="multipart/form-data" >
                            @csrf
                            <div class="">
                                <label class="block text-sm text-gray-600" for="name">Nama Produk</label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="name"
                                    name="name" type="text" required placeholder="Nama Produk" aria-label="Name">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="profileImage">Gambar</label>
                                <img src="{{ asset('img/no-profile.png') }}" id="blah" width="150px" height="150px">
                                <input class="mt-2" accept="image/*" id="image" type="file" name="image"required>
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="email">Deskripsi</label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="email"
                                    name="description" type="text" required placeholder="Deskripsi Produk"
                                    aria-label="Email">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="email">Stock</label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="stock"
                                    name="stock" required placeholder="Stock Produk" type="number">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="email">Harga</label>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="price"
                                    name="price" required type="number" placeholder="Harga Produk" aria-label="price">
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

        <footer class="w-full bg-white text-right p-4">
            Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
        </footer>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
