@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Produk
					</div>
						<div class="card-body">
							<h3>{{$shop2->nama}}</h3>
							<hr>
							<p>
								Rp. {{number_format($shop2->harga)}} |
								Stok : {{$shop2->stok}} |
								Berat : {{$shop2->berat}} gr
							</p>
							<p>
								{!! nl2br ($shop2->deskripsi) !!}
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection