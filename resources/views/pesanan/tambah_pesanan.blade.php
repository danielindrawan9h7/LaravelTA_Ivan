<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Pesanan</title>
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
	<form action="/pesanan/simpan" method="POST">
		{{ csrf_field() }}
	<table cellspacing="20">
			<tr>
				<th colspan="3">Form Tambah Pesanan</th>
			</tr>
			<tr>
				<td style="padding-top: 25px;">No. Meja</td>
				<td style="padding-top: 25px;">:</td>
				<td style="padding-top: 25px;">
					<select name="no_meja">
						<option value=1>1</option>
						<option value=2>2</option>
						<option value=3>3</option>
						<option value=4>4</option>
						<option value=5>5</option>
						<option value=6>6</option>
						<option value=7>7</option>
						<option value=8>8</option>
						<option value=9>9</option>
						<option value=10>10</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td>:</td>
				<td>
					<select style="width: 105%; padding: 5px" name="nama_produk">
						@foreach($masakan as $m)
						<option value="{{ $m->nama_produk }}">{{ $m->nama_produk }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			
			<tr >
				<td>Porsi</td>
				<td>:</td>
				<td><input type="number" name="porsi"></td>
			</tr>
			<tr>
				<td style="padding-bottom: 25px;">Keterangan Tambahan</td>
				<td style="padding-bottom: 25px;">:</td>
				<td style="padding-bottom: 25px;"><input type="text" name="ket"></td>
			</tr>
			<tr>
				<td colspan="3s" class="border-bottom-form"></td>
			</tr>
			<tr>
				<td colspan="1">
					<a href="/pesanan">Cancel</a>
				</td>
				<td colspan="2">
					<input class="submit" type="submit" value="Simpan Data">
				</td>
			</tr>
			<tr>
				<td><input type="hidden" name="time" class="tanggal" value="{{ date('d F Y') }}"></td>
			</tr>
	</table>
	</form>
</body>
</html>