<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
@include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      
      <!-- partial -->

      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">

      <div align="center" style="padding-top:100px;">

      <table>
          <tr style="background-color:#7fffd4;">
            <th style="padding:10px">Imię i nazwisko lekarza</th>
            <th style="padding:10px">Nr telefonu</th>
            <th style="padding:10px">Specjalność</th>
            <th style="padding:10px">Nr kabinetu</th>
            <th style="padding:10px">Zdjęcie</th>
            <th style="padding:10px">Usunąć</th>
            <th style="padding:10px">Redagować</th>
            

          </tr>
           @foreach($data as $doctor)
          <tr align="center" style="background-color:;">
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->speciality}}</td>
            <td>{{$doctor->room}}</td>
            <td><img  src="doctorimage/{{$doctor->image}}" height="50" weight="50"></td>
          
        <td><a onclick="return confirm('Czy napewno chcesz usunąć?')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Usunąć</a></td>
        <td><a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Redagować</a></td>

        </tr>

          @endforeach


      </div>

      </div>
   
@include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>