@extends ('admin.admin')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Ubah Data Produk
					</div>
						<div class="card-body">
							<form action="{{url('shop2', $shop2->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$shop2->nama}}">>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Harga</label>
										<input type="text" class="form-control" name="harga" value="{{$shop2->harga}}">
									</div>	
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Berat</label>
										<input type="text" class="form-control" name="berat" value="{{$shop2->berat}}">>
									</div>
								</div>	
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Stok</label>
										<input type="text" class="form-control" name="stok" value="{{$shop2->stok}}">>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Deskripsi</label>
								<textarea name="deskripsi" class="form-control">{{$shop2->deskripsi}}">
								</textarea>
								
							</div>
									<button class="btn btn-dark float-right"><i class="fa fa-save">	</i>Simpan</button>
									</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection