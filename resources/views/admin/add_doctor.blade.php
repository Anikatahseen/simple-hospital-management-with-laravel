

<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->

    <style type="text/css">

        label
        {
            display: inline-block;

            width: 200px;
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


        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <!-- partial -->
        @include('admin.navbar')

            <!-- partial -->

        <div class="container-fluid page-body-wrapper">





        <div class="container" align="center" style="padding-top: 100px;">


            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button"class="close" data-bs-dismiss="alert">
                        X
                    </button>
                    <strong>Success !</strong> {{ session('success') }}
                </div>
            @endif


            <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px;">

                    <label>Doctor Name</label>
                    <input type="text" style="color: black;" name="name" placeholder="Write the name" required="">

                </div>


                <div style="padding: 15px;">

                    <label>Phone</label>
                    <input type="number" style="color: black;" name="phone" placeholder="Write the number" required="">

                </div>


                <div style="padding: 15px;">

                    <label>specality</label>

                    <select name="specality" style="color: black; width: 220px;" required="">
                        <option class="text-center">---Select---</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="nose">Nose</option>

                    </select>

                </div>


                <div style="padding: 15px;">

                    <label>Room No</label>
                    <input type="text" style="color: black;" name="room" placeholder="Write the room number" required="">

                </div>



                <div style="padding: 15px;">

                    <label>Doctor Image</label>

                    <input type="file" name="file" required="">

                </div>



                <div style="padding: 15px;">


                    <input type="submit" class="btn btn-success">

                </div>

            </form>


        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

@include('admin.js')

</body>
</html>
