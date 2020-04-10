<!DOCTYPE html>
<html>
<head>
<title>{{$data->first()->nama_siswa}}'s Curiculum Vitae</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link type="text/css" rel="stylesheet" href="{{asset('cv/download/style.css')}}">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
</head>
<body id="top">
<div id="cv" class="instae">
	<div class="mainDetails">
		<div id="headshot" class="quicke">
			<img src="{{asset('image/profiles/'.$data->first()->foto)}}" alt="Alan Smith" />
		</div>

		<div id="name">
			<h1 class="quicke delayTwo">{{ $data->first()->name}}</h1>
			<h2 class="quicke delayThree">{{ $data->first()->jabatan}}</h2>
		</div>

		<div id="contactDetails" class="quicke delayFour">
			<ul>
				<li>email: <a href="mailto:{{$data->first()->email}}" target="_blank">{{$data->first()->email}}</a></li>
				<li>phone: <a href="tel:{{$data->first()->telp}}">{{$data->first()->telp}}</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div id="mainArea" class="quicke delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Profil Pribadi</h1>
				</div>

				<div class="sectionContent">
					<p>Saya Murid Wikrama</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Riwayat Kerja</h1>
			</div>

			<div class="sectionContent">
                @foreach($data as $k)
				<article>
					<h2>{{$k->jabatan}}</h2>
					<p class="subDetails">{{$k->created_at->year}} - {{$k->updated_at->year}}</p>
					<p> <p>{{$k->nama}}, {{$k->kota}} <br /></p>
                </article>
                @endforeach
			</div>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Kemampuan</h1>
			</div>

			<div class="sectionContent">
				<ul class="keySkills">
					<li>A Key Skill</li>
					<li>A Key Skill</li>
					<li>A Key Skill</li>
					<li>A Key Skill</li>
					<li>A Key Skill</li>
					<li>A Key Skill</li>
					<li>A Key Skill</li>
					<li>A Key Skill</li>
				</ul>
			</div>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Riwayat Pendidikan</h1>
			</div>

			<div class="sectionContent">
                <article>
					<h2>{{$data->first()->jurusan}}</h2>
					<p class="subDetails">{{$data->first()->masuk}} - {{$data->first()->lulus}}</p>
					<p> <p>SMK WIKRAMA , Bogor <br /></p>
                </article>
                @foreach($data as $k)
				<article>
					<h2>{{$k->durasi_kontrak}} {{$k->jabatan}}</h2>
					<p class="subDetails">{{$k->created_at->year}} - {{$k->updated_at->year}}</p>
					<p> <p>{{$k->nama}}, {{$k->kota}} <br /></p>
                </article>
                @endforeach
			</div>
			</div>
			<div class="clear"></div>
        </section>
        <br>
        <br>
        <br>

	</div>
</div>
</body>
</html>
