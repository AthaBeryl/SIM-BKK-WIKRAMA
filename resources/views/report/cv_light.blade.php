<!DOCTYPE html>
<html>
<head>
    <title>Resume</title>
    <link href="{{asset('cv/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <br>
<div class="container">
<div class="row">
    <div class="col-md-8">
        <img src="{{asset('image/profiles/'.$data->first()->foto)}}" alt="Alan Smith" style="max-width:200px;max-height:200px;object-fit: cover" />
        <h1>{{ $data->first()->name}}</h1>
        <h2>{{ $data->first()->jabatan}}</h2>
    </div>
    <div class="col-md-4">
        <li>email: <a href="mailto:{{$data->first()->email}}" target="_blank">{{$data->first()->email}}</a></li>
		<li>phone: <a href="tel:{{$data->first()->telp}}">{{$data->first()->telp}}</a></li>
    </div>
</div>

<hr>
    <div class="row">
        <div class="col-md-6">
            <h1>Profil Pribadi</h1>
        </div>
        <p>Saya Murid Wikrama</p>
    </div>


</div>
</body>
</html>
