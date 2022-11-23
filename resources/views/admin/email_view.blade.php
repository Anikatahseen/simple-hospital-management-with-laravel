

<!DOCTYPE html>
<html lang="en">
    <head>

    <base href="/public">

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


            <form action="{{url('sendemail',$data->id)}}" method="post">

                @csrF

                <div style="padding: 15px;">

                    <label>Greeting</label>
                    <input type="text" style="color: black;" name="greeting" required="">

                </div>


                <div style="padding: 15px;">

                    <label>Body</label>
                    <input type="text" style="color: black;" name="body" required="">

                </div>

                <div style="padding: 15px;">

                    <label>Action Text</label>
                    <input type="text" style="color: black;" name="actiontext" required="">

                </div>

                <div style="padding: 15px;">

                    <label>Action Url</label>
                    <input type="text" style="color: black;" name="actionurl" required="">

                </div>

                <div style="padding: 15px;">

                    <label>End Part</label>
                    <input type="text" style="color: black;" name="endpart" required="">

                </div>

                <div style="padding: 15px;">

                    <input class="btn btn-success" type="submit">

                </div>

            </form>


        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

@include('admin.js')

</body>
</html>
