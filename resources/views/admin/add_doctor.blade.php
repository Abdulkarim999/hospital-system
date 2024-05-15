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

		<div class="container"  style="padding-top:50px; ">

		@if(session()->has('message'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">x</button>
			{{session()->get('message')}}

		</div>
		@endif


			<h1  style="font-size:25px;">Make an Appointment</h1>
			<form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
				@csrf
			<div class="col-12 col-sm-6 py-2 ">
				<label for="">Doctor Name</label>
            <input type="text" class="form-control" style="color:black;" placeholder="Doctor's Name" name="name" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Phone</label>
            <input type="number" class="form-control" style="color:black;" placeholder="Phone Number" name="phone" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Speciality</label>
            <select name="speciality" id="" style="color:black; width:200px;" required="">
			    <option value="">--select--</option>   
				<option value="Skin">Skin</option>
				<option value="Heart">Heart</option>
				<option value="Nose">Nose</option>
				<option value="Eye">Eye</option>
			</select>
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Room No</label>
            <input type="text" class="form-control" style="color:black;" placeholder="Room number" name="room" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Doctor Image</label>
            <input type="file" name="image" id="" required="">
          </div>

		  <button type="submit" style="margin-left:130px;" class="btn btn-success mt-3  wow zoomIn">Submit Request</button>
		  </form>
		</div>


		</div>
        
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>