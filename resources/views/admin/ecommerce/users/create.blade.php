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
            <h4 style="margin-left: 21px;">Create a new users</h4>
            <hr>
            <div class="form" style="padding: 7px;">
                <div class="row">
                    <div class="col-md-12">
                        <form action="">
                            <div class="col-md-6">
                                <label for="Name">Username:</label>
                                <input type="text" placeholder="Enter Username" name="username" id="username" class="form-control" require value="">
                            </div>
                            <div class="col-md-6">
                                <label for="Name">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" require value="">
                            </div>
                            <div class="col-md-6" style="margin-top: 18px;">
                                <label for="Name">Mobile</label>
                                <input type="text" placeholder="Enter Username" name="username" id="username" class="form-control" require value="">
                            </div>
                            <div class="col-md-6" style="margin-top: 18px;">
                                <label for="Name">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" require value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>





@include('layouts.script')