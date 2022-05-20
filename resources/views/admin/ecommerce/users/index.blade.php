@include('layouts.toplink')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>

@include('layouts.header')
@include('layouts.sidebar')



<div class="content-wrapper">
<section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          
</section>
    <section class="content">
        <div class="data-box">
            
            <div class="table">
            <table id="table_id" class="display">
                <a href="{{route('ecommerce.user.create')}}" class="btn btn-success" style="float: right; font-size: 18px;"><i class="fa-solid fa-plus"></i>&nbsp;Create New User</a>
                <br><br><br>
               
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Register At</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Arindam Bera</td>
                        <td>abera0275@gmail.com</td>
                        <td>9007049952</td>
                        <td>Uluberia</td>
                        <td>05-19-2022</td>
                        <td>
                            <a href="#" class="btn btn-info " onclick="chk()"><i class="fa-solid fa-pencil"></i>&nbsp;Edit</a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i>&nbsp;Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Arindam Bera</td>
                        <td>abera0275@gmail.com</td>
                        <td>9007049952</td>
                        <td>Uluberia</td>
                        <td>05-19-2022</td>
                        <td>
                            <a href="#" class="btn btn-info "><i class="fa-solid fa-pencil"></i>&nbsp;Edit</a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i>&nbsp;Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Arindam Bera</td>
                        <td>abera0275@gmail.com</td>
                        <td>9007049952</td>
                        <td>Uluberia</td>
                        <td>05-19-2022</td>
                        <td>
                            <a href="#" class="btn btn-info "><i class="fa-solid fa-pencil"></i>&nbsp;Edit</a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i>&nbsp;Delete</a>
                        </td>
                    </tr>
                   
                    
                </tbody>
            </table>
            </div>
        </div>
    </section>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });

    function chk()
    {
        confirm("Are You Want to sure edit");
    }
</script>
@include('layouts.script')
