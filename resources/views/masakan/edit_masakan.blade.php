<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Masakan</title>
</head>

<style type="text/css">
	* {
		font-weight: 400;
		font-family: 'Arial';
	}

	body {
		background-color: grey;
	}

	table {
		width: 800px;
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: white;
		text-align: center;
		padding: 40px;
		border-radius: 20px;
		box-shadow: 10px 10px 20px black;
	}

	table td {
		text-align: left;
	}

	table td input {
		width: 100%;
		padding: 5px;
		outline: none;
	}

	th {
		border-bottom: 2px solid #e6e6e6;
		padding-bottom: 25px;
		font-size: 20px;
		font-weight: 400;
	}

	.border-bottom-form {
		border-top: 2px solid #e6e6e6;
		padding-top: 25px;
	}

	table a {
		text-align: center;
		text-decoration: none;
		font-size: 15px;
		display: inline-block;
		background-color: #ff0000;
		color: white;
		padding: 15px 0;
		width: 40%;
		transition: .3s;
		border-radius: 5px;
		width: 100%;
		font-weight: 300;
	}

	table a:hover, table a:active {
		background-color: #cf0202;
		transition: .3s;
	}

	table button {
		background-color: #4f5eff;
		border: none;
		cursor: pointer;
		color: white;
		padding: 15px 0;
		width: 40%;
		transition: .3s;
		border-radius: 5px;
		width: 100%;
		font-weight: 600;
	}

	table button:hover, table button:active {
		background-color: #0012d1;
		transition: .3s;
	}

	select {
		padding: 5px;
		outline: none;
		border: 1px solid #b5b5b5;
	}

	table .submit {
		text-align: center;
		text-decoration: none;
		font-size: 15px;
		display: inline-block;
		background-color: #4f5eff;
		color: white;
		padding: 15px 0;
		width: 40%;
		transition: .3s;
		border-radius: 5px;
		width: 100%;
		font-weight: 300;
		border: none;
	}

	table .submit:hover {
		cursor: pointer;
		background-color: #0012d1;
		transition: .3s;
	}

</style>
<body>
	@foreach($masakan as $m)
	<form action="/masakan/update" method="POST">
		{{ csrf_field() }}
	<table cellspacing="20">
			<tr>
				<th colspan="3">Form Edit Menu</th>
			</tr>
			<tr>
				<td>Nama Menu</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" value="{{ $m->nama_produk }}">
				</td>
			</tr>
			
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><select name="jenis" style="width: 103%; padding: 5px;">
					<option value="Makanan" @if($m->jenis == "Makanan") selected @endif>Makanan</option>
					<option value="Minuman" @if($m->jenis == "Minuman") selected @endif>Minuman</option>
				</select></td>
			</tr>

			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="number" name="harga" value="{{ $m->harga }}"></td>
			</tr>
			<tr>
				<td colspan="3s" class="border-bottom-form"></td>
			</tr>
			<tr>
				<td colspan="1">
					<a href="/masakan">Cancel</a>
				</td>
				<td colspan="2">
					<input class="submit" type="submit" value="Simpan Data">
				</td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="{{ $m->id_menu }}"></td>
			</tr>
	</table>
	</form>
	@endforeach
</body>
</html>