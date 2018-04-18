@extends('layouts.app')
@section('content')
<div class="container top" align="center">
<h1> Welcome Owner</h1>
</div>
<div class="container top">
<br>
<br>
<div class="row">

<div class="col" style="padding:5%;">
<a href="/resident_list">
<img src="/img/confirm.jpg" class="img-responsive"  alt="Responsive image"></a>
</div>
<div class="col" style="padding:5%;">
<a href="/complaint">
<img src="/img/complaint.jpg" class="img-responsive"  alt="Responsive image height="100%" width="100%"></a>
</div>

</div>
<div class="container"; align="center" style="padding:10%;">
<a href="/validate"><img src="/img/validate.jpg"  alt="Responsive image" width="254" height="341" class="img-responsive"></a>
</div>

</div>
</div>
@endsection