@extends('layouts.master')
@section('content')
<p align="center">
	<b>
		<?php
echo $json_a['data']['title'];
?>
	</b>
	<br/><br/>
	<img src="<?php echo $json_a['data']['link']; ?>">
	<br/><br/>
	<b>
		<?php
echo $json_a['data']['description'];
?>
	</b>
</p>
@stop
