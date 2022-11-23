

<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->

        @include('admin.css')

    </head>
    <body>
        <div class="container-scroller">


        @include('admin.sidebar')


        @include('admin.navbar')


        <div class="container-fluid">

            <div align="center" style="padding-top: 100px;">

                <h1 class="text-center" style="font-size: 20px; color:white; padding-bottom: 10px; font-weight:bold;">Appointment list</h1>

                <table class="table table-bordered border-light">

                    <tr style="background-color: LightSalmon;" align="center">
                        <th style="padding: 10px; font-size: 15px; color: white;">Customer Name</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Email</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Phone</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Doctor Name</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Date</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Message</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Status</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Approve</th>
                        <th style="padding: 10px; font-size: 15px; color: white;">Cancel</th>
                    </tr>


                    @foreach ($data as $appoint)

                    <tr style="background-color: LightCyan;" align="center">
                        <td style="padding: 10px; font-size: 18px; color: black;">{{$appoint->name}}</td>
                        <td style="padding: 10px; font-size: 18px; color: black;">{{$appoint->email}}</td>
                        <td style="padding: 10px; font-size: 18px; color: black;">{{$appoint->phone}}</td>
                        <td style="padding: 10px; font-size: 18px; color: black;">{{$appoint->doctor}}</td>
                        <td style="padding: 10px; font-size: 18px; color: black;">{{$appoint->date}}</td>
                        <td style="padding: 10px; font-size: 18px; color: black;">{{$appoint->message}}</td>
                        <td style="padding: 10px; font-size: 18px; color: black;">{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a>
                        </td>

                        <td>
                            <a onclick="return confirm('are sure to do it?')" class="btn btn-info" href="{{url('canceled',$appoint->id)}}">Canceled</a>
                        </td>
                    </tr>

                    @endforeach

                </table>

            </div>

        </div>



@include('admin.js')
</body>
</html>
