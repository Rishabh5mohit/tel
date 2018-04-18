@extends('layouts.app')
@section('content')
<div class="container top" align="center">
<h1> Welcome Worker</h1>
</div>
<div class="container top">
<br>
<br>
<div class="row">

<div class="col" style="padding:5%;">
<a href="/worker/create">
<img src="/img/profile.png" class="img-responsive"  alt="Responsiveimage" width="100%"></a>
</div>
<div class="col" style="padding:5%;">
<a href="/worker/9">
<img src="/img/image.png" class="img-responsive"  alt="Responsive image" width="100%"></a>
</div>
<div class="col" style="padding:5%;">
<a href="/complaint/create">
<img src="/img/complaint.jpg" class="img-responsive"  alt="Responsive image" height="100%" width="100%"></a>
</div>

@endsection