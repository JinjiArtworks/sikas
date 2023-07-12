@extends('layouts.index')
@section('content')
    @php
        $total = 0;
        if ($cart != null) {
            foreach ($cart as $key => $value) {
                $total = $value['total_after_disc'] + $total;
            }
        }
    @endphp
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-2" style="text-decoration: underline">Tambah Transaksi</h1>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 my-6 pr-0 lg:pr-2">
                    <div class="leading-loose">
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
                                    <div class="ml-3 text-sm font-normal">Produk berhasil ditambahkan</div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                        data-dismiss-target="#toast-success" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
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
                                    <div class="ml-3 text-sm font-normal">Produk berhasil dihapus</div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                        data-dismiss-target="#toast-success" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @elseif (session('failed'))
                            <div class="alert alert-failed">
                                <div id="toast-failed"
                                    class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                                    role="alert">
                                    <div class="ml-3 text-sm font-normal">Produk gagal ditambahkan. </div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                        data-dismiss-target="#toast-failed" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <button
                            class="bg-blue-500 my-5 text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            onclick="toggleModal('modal-id')">
                            Tambah Transaksi
                        </button>
                        <form action="{{ route('transaction.add') }}" method="POST">
                            @csrf
                            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                id="modal-id">
                                <div class="relative w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button onclick="toggleModal('modal-id')" type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah
                                                Transaksi
                                            </h3>
                                            {{-- <div>
                                                <label for="id"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id
                                                    Produk
                                                </label>
                                                <select
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    id="id" name="id" type="text" required
                                                    placeholder="Nama Pelanggan" aria-label="Name">
                                                    @foreach ($products as $item)
                                                        <option value="{{ $item->id }}">{{ $item->id }} -
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div> --}}
                                            <div class="mt-2">
                                                <label for="product"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                                    Transaksi
                                                </label>
                                                <input
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    name="date" type="date" required
                                                    placeholder="Tanggal Transaksi" aria-label="date"
                                                    value="<?php echo date('Y-m-d'); ?>">
                                            </div>

                                            <div class="mt-2">
                                                <label for="karyawan"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                                                    Karyawan
                                                </label>
                                                <select
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    id="karyawan" name="karyawan" type="text" required
                                                    placeholder="Nama Pelanggan" aria-label="Name">
                                                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->id }} -
                                                        {{ Auth::user()->name }}</option>
                                                </select>
                                            </div>

                                            <div class="mt-2">
                                                <label for="customers"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                                                    Pelanggan
                                                </label>
                                                <select
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    id="customers" name="customers" type="text" required
                                                    placeholder="Nama Pelanggan" aria-label="Name">
                                                    @foreach ($customers as $item)
                                                        <option value="{{ $item->id }}">{{ $item->id }} -
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-2">
                                                <label for="product"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                                                    Produk
                                                </label>
                                                <select
                                                    class="select-product bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    id="product" name="product" type="text" required
                                                    placeholder="Nama Pelanggan" aria-label="Name">
                                                    @foreach ($products as $item)
                                                        <option value="{{ $item->id }}">{{ $item->id }} -
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mt-2">
                                                <label for="total"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity
                                                    Produk
                                                </label>
                                                <input type="quantity" name="quantity" id="quantity"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div>
                                            {{-- <div class="mt-2">
                                                <label for="price"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                                                    Produk
                                                </label>
                                                <input type="price" name="price" id="price"
                                                    class="price bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required>
                                            </div> --}}
                                            <button
                                                class="bg-blue-500 my-5 text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                type="submit">
                                                Submit
                                            </button>
                                            <button
                                                class="bg-red-500 my-5 text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                onclick="toggleModal('modal-id')">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                        </form>
                        @if ($cart != null)
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID Produk
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            ID Pelanggan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            ID Karyawan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tanggal Transaksi
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Harga Produk
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Quantity
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Total Transaksi
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Aksi
                                        </th>

                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($cart as $key => $c)
                                        {{-- {{ dd($c) }} --}}
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4">
                                                {{ $c['product'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $c['customers'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $c['karyawan'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $c['date'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @currency($c['price'])
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $c['quantity'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @currency($c['total_after_disc'])
                                            </td>

                                            <form method="GET"
                                                action="{{ route('transaction.deleteCart', ['id' => $c['id']]) }}">
                                                <td class="px-6 py-4">
                                                    <div class="w-5 transform hover:text-blue-500 hover:scale-110">
                                                        <button type="submit"
                                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                    <tr class="bg-white">
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                            @currency($total)
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <form method="POST" action="/store-transaction">
                                @csrf
                                <input type="hidden" value="{{ $total }}" name="grandTotal">
                                <button
                                    class="bg-blue-500 my-5 text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="submit">
                                    Konfirmasi
                                </button>
                            </form>
                        @else
                            -
                        @endif

                    </div>
                </div>
            </div>
        </main>
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

        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }

        $(document).ready(function() {
            $('.select-product').on('change', function() {
                if ($(this).val() != "default") {
                    $('.price').val($(this).val());
                } else {
                    $('.price').val('');
                }
            });
        });
    </script>
@endsection
