@extends('layouts.main')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-4">Data Barang</h1>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="p-2 border border-gray-300">ID</th>
                <th class="p-2 border border-gray-300">Nama Barang</th>
                <th class="p-2 border border-gray-300">Harga</th>
                <th class="p-2 border border-gray-300">Stok</th>
                <th class="p-2 border border-gray-300">ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
            <tr>
                <td class="p-2 border border-gray-300">{{ $item->id }}</td>
                <td class="p-2 border border-gray-300">{{ $item->nama_barang }}</td>
                <td class="p-2 border border-gray-300">{{ $item->harga }}</td>
                <td class="p-2 border border-gray-300">{{ $item->stok }}</td>
                <td class="p-2 border border-gray-300">{{ $item->id_supplier }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
