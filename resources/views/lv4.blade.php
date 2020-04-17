<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lv2課題</title>
	<style>
		body {
			position: fixed;
			margin-top: 0;
			height: 100%;
			width: 100%;
		}
		.logo {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 50%;
			z-index: -10;
		}
		.wrapper {
			margin: 0 auto;
			width: 500px;
			box-sizing: border-box;
		}
		.title {
			text-align: center;
		}
		.prefecture {
			margin: 0 auto;
			width: 100%;
			table-layout: fixed;
			border: 1px solid #000;
			border-collapse: collapse;
			border-spacing: 0;
			text-align: center;
			opacity: .9;
		}
		.prefecture th, .prefecture td {
			border: 1px solid #000;
		}
		.prefecture th {
			background-color: #24a;
			color: #fff;
		}
		.prefecture tbody tr {
			background-color: #fff;
		}
		.prefecture tbody tr:nth-child(even) {
			background-color: #dedede;
		}
	</style>
</head>
<body>
	<div class="wrapper">
	<img class="logo" src="https://res.cloudinary.com/gizumo-inc/image/upload/v1583407487/curriculums/Laravel%20Lesson/extra/extra_work_bg.png" alt="">
	<h2 class="title">Lv4</h2>
	<table class="prefecture">
		<thead>
		<tr>
			<th>id</th>
			<th>都道府県</th>
			<th>県庁所在地</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>1</td>
			<td>北海道</td>
			<td>函館市</td>
		</tr>
		<tr>
			<td>2</td>
			<td>青森県</td>
			<td>弘前市</td>
		</tr>
		<tr>
			<td>3</td>
			<td>沖縄県</td>
			<td>那覇市</td>
		</tr>
		@foreach ($items as $item)
		<tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->pref }}</td>
        <td>{{ $item->city }}</td>
    </tr>
    @endforeach		
		</tbody>
	</table>
	</div>
</body>
</html>