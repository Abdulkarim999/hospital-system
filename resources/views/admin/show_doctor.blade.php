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
			<div class="container" style="padding-top:30px;">
			<div class="row">
		<div class="col-12">
			<div class="table-responsiv e">
  <table class="table table-sm table-striped table-bordered table-hover" >
  <thead>
    <tr>
      <th scope="col">Doctor Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Speciality</th>
      <th scope="col">Room No</th>
	  <th scope="col">Image </th>
	  <th scope="col">Delete </th>
	  <th scope="col">Update </th>
	  
    </tr>
  </thead>
  <tbody>
	@foreach($data as $appoints)
    <tr>
      <td>{{$appoints->name}}</td>
      <td>{{$appoints->phone}}</td>
      <td>{{$appoints->speciality}}</td>
	  <td>{{$appoints->room}}</td>
	  <td>  
		<img height="200" width="200" src="doctorimage/{{$appoints->Image}}" alt=""> 
	</td>
	  
	  <td>
		<a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger"  href="{{url('deletedoctor',$appoints->id)}}">Delete</a>
	</td>

	<td>
		<a class="btn btn-primary"  href="{{url('updatedoctor',$appoints->id)}}">Update</a>
	</td>
    </tr>
  </tbody>
  @endforeach
</table>


</div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>