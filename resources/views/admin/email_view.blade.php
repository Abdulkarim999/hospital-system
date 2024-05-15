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

		<div class="container"  style="padding-top:50px; ">

		@if(session()->has('message'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">x</button>
			{{session()->get('message')}}

		</div>
		@endif


			<h1  style="font-size:25px;">Send Email  </h1>
			<form action="{{url('sendemail', $data->id)}}" method="post" >
				@csrf
			<div class="col-12 col-sm-6 py-2 ">
				<label for="">Greeting </label>
            <input type="text" class="form-control" style="color:black;"  name="greeting" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Body</label>
            <input type="text" class="form-control" style="color:black;"  name="body" required="">
          </div>
		  
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Action Text </label>
            <input type="text" class="form-control" style="color:black;"  name="actiontext" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Action Url </label>
            <input type="text" class="form-control" style="color:black;"  name="actionurl" required="">
          </div>
		  <div class="col-12 col-sm-6 py-2 ">
			<label for="">Endpart  </label>
            <input type="text" class="form-control" style="color:black;"  name="endpart" required="">
          </div>
		  
		  <button type="submit" style="margin-left:130px;" class="btn btn-success mt-3  wow zoomIn">Submit Request</button>
		  </form>
		</div>


		</div>
        
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>