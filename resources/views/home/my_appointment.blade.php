<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('home.header')
<div class="container-fluid" style="padding-top:30px;">
	<div class="row">
		<div class="col-12 ">
			<div class="table-responsiv e">
  <table class="table table-sm table-striped table-bordered table-hover" >
  <thead>
    <tr>
      <th scope="col">Doctor Name</th>
      <th scope="col">Date</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
	  <th scope="col">Cancel Appointment</th>
    </tr>
  </thead>
  <tbody>
	@foreach($appoint as $appoints)
    <tr>
      <td>{{$appoints->doctor}}</td>
      <td>{{$appoints->date}}</td>
      <td>{{$appoints->message}}</td>
	  <td>{{$appoints->status}}</td>
	  <td><a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>
</div>
</div>
</body>
</html>