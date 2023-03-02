<div>
    <div class="container">
        <div class="row-3">
            <div class="card">
                <div class="card-header">
                    Keranjang
                </div>
                <div class="card-body">

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Belanjaan saya
                </div>
                <div class="card-body">
                    @foreach ($datas as $item)
                        <p>{{ $item->nama_barang }}</p>
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
                                <img src="{{ asset('gambar/Ganci_miku.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Gantungan Kunci Hatsune Miku Card</h5>
                                  <p class="card-text">Gantungan Kunci Akrilik Kesukaan Wibu
                                  </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Rp. 12.000</li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-primary" wire:click="simpan('Gantungan Kunci Hatsune Miku Card', '12000')">Beli</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/Ganci_proseka.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Gantungan Kunci Project Sekai Card Tipe</h5>
                                  <p class="card-text">Gantungan Kunci Akrilik Kesukaan Fandom Project Sekai
                                  </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Rp. 12.000</li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-primary" wire:click="simpan('Gantungan Kunci Project Sekai Card Tipe', '12000')">Beli</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/Glossy_sticker_proseka.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Stiker Glossy Set Project Sekai</h5>
                                  <p class="card-text">Sticker Untuk Ditempel Ke HP, Laptop, Dll
                                  </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Rp. 10.000</li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-primary" wire:click="simpan('Stiker Glossy Set Project Sekai', '10000')">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
