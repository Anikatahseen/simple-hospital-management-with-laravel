

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
                        <th style="padding: 15px; font-size: 22px; color: white;">Delete</th>
                        <th style="padding: 15px; font-size: 22px; color: white;">Update</th>
                    </tr>



                    @foreach ($data as $doctor)

                    <tr style="background-color: PeachPuff" align="center">
                        <td style="padding: 10px; font-size: 20px; font-weight: 500; color: black;">{{$doctor->name}}</td>
                        <td style="padding: 10px; font-size: 20px; font-weight: 500; color: black;">{{$doctor->phone}}</td>
                        <td style="padding: 10px; font-size: 20px; font-weight: 500; color: black;">{{$doctor->specality}}</td>
                        <td style="padding: 10px; font-size: 20px; font-weight: 500; color: black;">{{$doctor->room}}</td>
                        <td style="padding: 10px"><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                        <td><a onclick="return confirm('are sure to do delete?')" class="btn btn-warning" style="font-size: 20px; font-weight: 600;" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                        <td><a class="btn btn-info" style="font-size: 20px; font-weight: 600;" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                    </tr>

                    @endforeach




                </table>

        </div>



@include('admin.js')
</body>
</html>
