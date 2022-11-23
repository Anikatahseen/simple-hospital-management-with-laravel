

<!DOCTYPE html>
<html lang="en">
    <head>

        <base href="/public">

        <style type="text/css">

            label
            {
                display: inline-block;

                width: 200px;

                font-weight: 600;
            }

            button
            {
                float: right;
            }

        </style>

        @include('admin.css')

    </head>
    <body>
        <div class="container-scroller">


        @include('admin.sidebar')


        @include('admin.navbar')


        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px">


                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button"class="close" data-bs-dismiss="alert">
                            X
                        </button>
                        <strong>Success !</strong> {{ session('success') }}
                    </div>
                @endif


                <form action="{{url('editdoctor',$data->id)}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">

                        <label>Doctor Name</label>
                        <input type="text" style="color: black;" name="name" value="{{$data->name}}">

                    </div>


                    <div style="padding: 15px;">

                        <label>Phone</label>
                        <input type="number" style="color: black;" name="phone" value="{{$data->phone}}">

                    </div>


                    <div style="padding: 15px;">

                        <label>Specality</label>
                        <input type="text" style="color: black;" name="specality" value="{{$data->specality}}">

                    </div>


                    <div style="padding: 15px;">

                        <label>Room</label>
                        <input type="text" style="color: black;" name="room" value="{{$data->room}}">

                    </div>


                    <div style="padding: 15px;">

                        <label>Old Image</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}">

                    </div>


                    <div style="padding: 15px;">

                        <label>Change Image</label>
                        <input type="file" name="file">

                    </div>


                    <div style="padding: 15px;">


                        <input type="submit" class="btn btn-primary">

                    </div>

                </form>


            </div>

        </div>


@include('admin.js')
</body>
</html>
