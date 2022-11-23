

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

            <div class="container" align="center" style="padding-top: 100px;">

                <table>

                    <tr style="background-color: Plum;" align="center">
                        <th style="padding: 15px; font-size: 22px; color: white;">Doctor Name</th>
                        <th style="padding: 15px; font-size: 22px; color: white;">Phone</th>
                        <th style="padding: 15px; font-size: 22px; color: white;">Specality</th>
                        <th style="padding: 15px; font-size: 22px; color: white;">Room No</th>
                        <th style="padding: 15px; font-size: 22px; color: white;">Image</th>
                    </tr>



                    @foreach ($data as $doctor)

                    <tr style="background-color: Plum" align="center">
                        <td style="padding: 10px; font-size: 20px; color: black;">{{$doctor->name}}</td>
                        <td style="padding: 10px; font-size: 20px; color: black;">{{$doctor->phone}}</td>
                        <td style="padding: 10px; font-size: 20px; color: black;">{{$doctor->specality}}</td>
                        <td style="padding: 10px; font-size: 20px; color: black;">{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                    </tr>

                    @endforeach




                </table>

        </div>



@include('admin.js')
</body>
</html>
