<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>
    <a href="{{ route('produk.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4 inline-block">Tambah Produk</a>

    <table class="min-w-full bg-white border border-gray-200 rounded">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 border">Nama</th>
                <th class="py-2 px-4 border">Harga</th>
                <th class="py-2 px-4 border">Stok</th>
                <th class="py-2 px-4 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
            <tr class="border-b">
                <td class="py-2 px-4">{{ $produk->nama }}</td>
                <td class="py-2 px-4">{{ number_format($produk->harga, 0, ',', '.') }}</td>
                <td class="py-2 px-4">{{ $produk->stok }}</td>
                <td class="py-2 px-4 flex space-x-2">
                    <a href="{{ route('produk.edit', $produk->id) }}" class="bg-yellow-500 text-white py-1 px-2 rounded">Edit</a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
