<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Keranjang
                    </div>
                    <div class="card-body">
                       Rp.  {{ $jumlah }}
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Belanjaan Saya
                    </div>
                    <div class="card-body">
                        @foreach($datas as $item)
                            <p>{{ $item->nama_barang }}<button class="btn btn-danger" wire:click="destroy({{ $item->id }})">Hapus</button></p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/Ganci_miku.png') }}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Gantungan Kunci Hatsune Miku</h5>
                                        <p>Ganci Akrilik Kesukaan Wibu</p>
                                    </div>
                                    <ul class="item-group item-group-flush">
                                        <li class="list-group-item">
                                            Rp. 16.000
                                        </li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Gantungan Kunci Hatsune Miku', '16000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/Ganci_proseka.png') }}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Gantungan Kunci Project sekai</h5>
                                        <p>Gantungan Kunci Aksesoris kesukaan Fandom Project Sekai</p>
                                    </div>
                                    <ul class="item-group item-group-flush">
                                        <li class="list-group-item">
                                            Rp. 16.000
                                        </li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Gantungan Kunci Project Sekai', '16000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/Glossy_sticker_proseka.png') }}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Sticker Glossy Set Project Sekai</h5>
                                        <p>Stiker Untuk Ditempel Di HP, Laptop, Dll</p>
                                    </div>
                                    <ul class="item-group item-group-flush">
                                        <li class="list-group-item">
                                            Rp. 10.000
                                        </li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Sticker Glossy Set Project Sekai', '10000')">BELI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
