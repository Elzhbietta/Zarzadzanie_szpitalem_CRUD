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
      
        <!-- partial -->
   
       <div class="container-fluid page-body-wrapper">
       
       <div align="center" style="padding-top:100px;">

         <table>
          <tr style="background-color:#7fffd4;">
            <th style="padding:10px">Imię i nazwisko pacjenta</th>
            <th style="padding:10px">Email</th>
            <th style="padding:10px">Nr telefonu</th>
            <th style="padding:10px">Imię i nazwisko lekarza</th>
            <th style="padding:10px">Data</th>
            <th style="padding:10px">Wiadomość</th>
            <th style="padding:10px">Status</th>
            <th style="padding:10px">Potwierdzone</th>
            <th style="padding:10px">Odwołane</th>

          </tr>

          @foreach($data as $appoint)

          <tr align="center" style="background-color:;">
            <td>{{$appoint->name}}</td>
            <td>{{$appoint->email}}</td>
            <td>{{$appoint->phone}}</td>
            <td>{{$appoint->doctor}}</td>
            <td>{{$appoint->date}}</td>
            <td>{{$appoint->message}}</td>
            <td>{{$appoint->status}}</td>
            <td>
                <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Potwierdzone</a>
            </td>
            <td>
            <a class="btn btn-danger" href="{{url('canceled', $appoint->id)}}">Odwołane</a>
            </td>
          </tr>

          @endforeach

         </table>

       </div>

       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
@include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>