@extends('layouts.master')
@section('content')

<table  class="table table-striped table-bordered table-hover" id="example">
	<thead>
		<tr>
			<td>No</td>
			<td>ID</td>
			<td>Nama Topik</td>
		</tr>
	</thead>
	<tbody>
<?php
$no = 1;
?>
	@foreach($json_a['data'] as $value)
		<tr>
			<td><?php echo "$no"; ?></td>
			<td>{{ $value['id'] }}</td>
			<td><a href="{{ URL('/show/list/	' . $value['id']) }}">{{ $value['name'] }}</a></td>
		</tr>
		<?php $no++;?>
	@endforeach
	</tbody>
</table>

@stop