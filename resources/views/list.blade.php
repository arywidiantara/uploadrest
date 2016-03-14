@extends('layouts.master')
@section('content')

<?php
$no = 1;
?>
	@foreach($json_a['data'] as $value)
		<a href="{{ URL('/show/detail/' . $id . "/" . $value['id']) }}">
			<img src="<?php echo $value['link']; ?>" width="250px" height="200px">
		</a>
		&nbsp;
	@endforeach

@stop
