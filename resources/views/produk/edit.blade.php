<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Nama Produk:</label>
            <input type="text" name="nama" value="{{ $produk->nama }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Harga:</label>
            <input type="number" name="harga" value="{{ $produk->harga }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Stok:</label>
            <input type="number" name="stok" value="{{ $produk->stok }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
    </form>
</div>
