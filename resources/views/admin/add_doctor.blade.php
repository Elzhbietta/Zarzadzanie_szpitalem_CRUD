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

        @if(session()->has('message'))

    
        <div class="alert alert-success">

         {{session()->get('message')}}

        </div>


        @endif

        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            
        @csrf

        <div style="padding:15px;">

        <label>Imię i nazwisko lekarza</label>
        <input type="text" style="color:black" name="name" placeholder="Wpisz imię i nazwisko">

        </div>



        <div style="padding:15px;">

        <label>Nr telefonu</label>
        <input type="text" style="color:black" name="number" placeholder="Wpisz nr telefonu">

       </div>





       <div style="padding:15px;">

        <label>Specjalność</label>
        
        <select name="speciality" style="color: black; width: 200px;">
        <option>--Wybierz--</option>
        <option value="skin">Dermatolog</option>
        <option value="heart">Kardiolog</option>
        <option value="eye">Okulista</option>
        <option value="nose">Otorynolaryngolog</option>

       </select>

       </div>




       <div style="padding:15px;">

        <label>Nr kabinetu</label>
        <input type="text" style="color:black" name="room" placeholder="Wpisz numer kabinetu">

       </div>


       <div style="padding:15px;">

        <label>Zdjęcie lekarza</label>
        <input type="file" name="file">
       </div>

       <div style="padding:15px;">

        <input type="submit" class="btn btn-success">
       </div>







        </form>

        </div>

        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
   
@include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>