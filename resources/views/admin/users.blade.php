@extends('layouts.admin')
@section('title','users')
@section('main_content')
    <div class="d-flex justify-content-between p-2">
        <h4>Users</h4>
        <button class="btn btn-danger">Add User</button>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>adnan</td>
                        <td>aaa@aa.net</td>
                        <td class="text-right">noactions</td>

                    </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("document").ready(function(){
        alert("dne");
        fetch_users();
        

        function fetch_users(){
         
            
            $.ajax({
                type:'post',
                url: '{{route('fetch_users')}}',
                data: {
                "_token": "{{ csrf_token() }}",
                
                },
                success:function(response){
                    alert(response);
                },



                error: function (jqXhr, textStatus, errorMessage) { // error callback 
                    alert(errorMessage);

                }
            });
        }
    });
</script>