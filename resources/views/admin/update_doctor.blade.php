<!DOCTYPE html>
<html lang="en">
  <head>
	<base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">
		 <div class="container" align="center"  style="padding-top:50px; ">

		@if(session()->has('message'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">x</button>
			{{session()->get('message')}}

		</div>
		@endif


			<h1  style="font-size:25px;">Update Details</h1>
			<form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
				@csrf
			<div class="col-12 col-sm-6 py-2 ">
				<label for="">Doctor Name</label>
            <input type="text" value="{{$data->name}}" class="form-control" style="color:black;" placeholder="Doctor's Name" name="name" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Phone</label>
            <input type="number" value="{{$data->phone}}" class="form-control" style="color:black;" placeholder="Phone Number" name="phone" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Speciality</label>
            <select name="speciality" id="" value="{{$data->speciality}}" style="color:black; width:200px;" required="">
			    <option value="">--select--</option>   
				<option value="Skin">Skin</option>
				<option value="Heart">Heart</option>
				<option value="Nose">Nose</option>
				<option value="Eye">Eye</option>
			</select>
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Room No</label>
            <input type="text" class="form-control" value="{{$data->room}}" style="color:black;" placeholder="Room number" name="room" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Old Image</label>
           <img height="100" width="100" src="doctorimage/{{$data->Image}}" alt="">
          </div>

		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">New Image</label>
            <input type="file" name="image" id="" required="">
          </div>

		  <button type="submit"  class="btn btn-success mt-3  wow zoomIn">Submit Request</button>
		  </form>
		</div>


</div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>