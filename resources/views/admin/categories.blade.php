@extends('layouts.admin')
@section('title','categories')
@section('main_content')
<div class="d-flex justify-content-between p-2">
        <h4>Categories</h4>
        <button class="btn btn-danger">Add Category</button>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_categories">
                   
                </tbody>

            </table>
        </div>
    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    fetch_categories();
    function fetch_categories(){
        $.ajax({
            type:"post",
            url:"{{route('fetch_categories')}}",
            data:{"_token":"{{csrf_token()}}"},
            success:function(response){
                $("#show_categories").html(response);
                
            },
            error:function(jqXhr, textStatus, errorMessage){
                console.log('some errors'+jqXhr+textStatus+errorMessage);
            }
        });
        
    }

</script>