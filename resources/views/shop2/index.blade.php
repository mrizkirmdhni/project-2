@extends('admin.admin')
@section('content')

					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Shop</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Shop
					<a href="{{url('admin/shop2/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Nama</th>
									<th>Harga</th>
									<th>Stok</th>
							</thead>
								<tbody>
									@foreach($list_shop2 as $shop2)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>
											<div class="btn-group">
											<a href="{{url('admin/shop2', $shop2->id)}}"class="btn btn-dark"> <i class="fa fa-info"></i></a>
											<a href="{{url('admin/shop2', $shop2->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											@include('admin.utils.delete', ['url' => url('admin/shop2', $shop2->id)])
											</div>
										</td>
										<td>{{$shop2->nama}}</td>
										<td>{{$shop2->harga}}</td>
										<td>{{$shop2->stok}}</td>
									</tr>
									@endforeach
								</tbody>
								
					</table>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection