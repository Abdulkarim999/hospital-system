<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">

	   <div class="container" style="padding-top:30px; ">
	<div class="row">
		<div class="col-12">
			<div class="table-responsive">
  <table class="table table-sm table-striped table-bordered table-hover" >
  <thead>
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Doctor Name</th>
	  <th scope="col">Date </th>
	  <th scope="col">Message </th>
	  <th scope="col">Status </th>
	  <th scope="col">Approved </th>
	  <th scope="col">Cancel </th>
	  <th scope="col">Send Mail </th>
    </tr>
  </thead>
  <tbody>
	@foreach($data as $appoints)
    <tr>
      <td>{{$appoints->name}}</td>
      <td>{{$appoints->email}}</td>
      <td>{{$appoints->phone}}</td>
	  <td>{{$appoints->doctor}}</td>
	  <td>{{$appoints->date}}</td>
	  <td>{{$appoints->message}}</td>
	  <td>{{$appoints->status}}</td>
	  <td>
		<a class="btn btn-sm btn-success"  href="{{url('approved',$appoints->id)}}">Approved</a>
	</td>

	<td>
		<a class="btn btn-sm btn-danger"  href="{{url('cancelled',$appoints->id)}}">Canceled</a>
	</td>
	<td>
		<a class="btn btn-sm btn-primary"  href="{{url('emailview',$appoints->id)}}">Send Mail</a>
	</td>
    </tr>
  </tbody>
  @endforeach
</table>






</div>

</div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>