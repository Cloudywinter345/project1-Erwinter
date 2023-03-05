<?php

namespace App\Http\Livewire;

use App\Console\Kernel;
use App\Models\Keranjang;
use Livewire\Component;

class Shop extends Component
{

    public function simpan($nama_barang, $harga_barang)
    {
        $simpan = new Keranjang();
        $simpan->nama_barang = $nama_barang;
        $simpan->harga_barang = $harga_barang;
        $simpan->save();
    }
    public function render()
    {
        return view('livewire.shop', [
            'datas' => Keranjang::all(),
            'jumlah' => Keranjang::sum('harga_barang'),
        ]);
    }
    public function destroy($id_barang)
    {
        $destroy = Keranjang::findorFail($id_barang);
        $destroy->delete();
        $this->reset();
    }
}
