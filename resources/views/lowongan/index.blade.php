@extends('layouts.admin')
@section('content')

	<div class="row">
	<div class="container">
	<div class="col-md-16">
			<div class="panel panel-success">
			  <div class="panel-heading"><a href="{{ route('lowongan.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i> Add</a>
			  	
			  	</div>
			  
			  <div class="row">
     			<div class="col-md-12">
                 <!-- DATA TABLE-->
                   <div class="table-responsive m-b-40">
					<table class="table table-data2">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Lowongan</th>
					  <th>Tanggal Mulai</th>
					  <th>Lokasi</th>
					  <th>Gaji</th>
					  <th>Deskripsi Iklan</th>
					  <th>Deskripsi Perusahaan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($low as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_low }}</td>
				    	<td>{{ $data->tgl_mulai }}</td>
				    	<td>{{ $data->lokasi }}</td>
				    	<td>Rp.{{ $data->gaji }}</td>
				    	<td>{{ $data->deskripsi_iklan }}</td>
				    	<td><p>{{ $data->Perusahaan->deskripsi }}</p></td>
				    	
           
<td>
	<a class="btn btn-warning" href="{{ route('lowongan.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('lowongan.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection