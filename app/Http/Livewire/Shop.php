<?php

namespace App\Http\Livewire;

use App\Console\Kernel;
use App\Models\Keranjang;
use Livewire\Component;

class Shop extends Component
{
    public function simpan($nama_barang, $harga_barang)
    {
        dd($nama_barang . '-' . $harga_barang);
    }
    public function render()
    {
        return view('livewire.shop', [
            'datas' => Keranjang::all(),
        ]);
    }
}
