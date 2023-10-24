@extends('layouts.app')

@section('content')
<div class="page-heading">
    <h3>Detail Distribusi</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Kode Distribusi: {{ $distribusi->kode_distribusi }}</h4>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('distribution') }}" class="btn btn-primary">
                                Kembali
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Nama Toko: {{ $toko->nama_toko }}</p>
                            <p>Nama Sopir: {{ $distribusi->nama_sopir }}</p>
                            <p>Plat No.: {{ $distribusi->plat_no }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Tanggal Distribusi: {{ $distribusi->tanggal_distribusi }}</p>
                            <p>Jumlah Keseluruhan Distribusi: {{ $distribusi->jumlah_distribusi }} KG</p>
                            <p>Total Harga: {{ $distribusi->total_harga }}</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Beras</th>
                                        <th>Jenis Beras</th>
                                        <th>Jumlah (KG)</th>
                                        <th>Harga (per KG)</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailDistribusi as $detail)
                                    <tr>
                                        <td>{{ $detail->nama_beras }}</td>
                                        <td>{{ $detail->jenis_beras }}</td>
                                        <td>{{ $detail->jumlah_beras }}</td>
                                        <td>{{ $detail->harga }}</td>
                                        <td>{{ $detail->sub_total }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
