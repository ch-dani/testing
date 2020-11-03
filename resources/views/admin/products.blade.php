@extends('layouts.admin')
@section('title','Products')
@section('main_content')

<div class="d-flex justify-content-between p-2">
        <h4>Users</h4>
        <button class="btn btn-danger">Add Product</button>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_products">
                   
                </tbody>

            </table>
        </div>
    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("document").ready(function(){
        
        products_fetch();

        function products_fetch(){
            $.ajax({
                type:"post",
                url:"{{route('fetch_products')}}",
                data:{"_token":"{{csrf_token()}}"},
                success:function(response){
                    console.log(typeof(response));
                    $("#show_products").html(response);
                },
                error: function (jqXhr, textStatus, errorMessage) { // error callback 
                    alert(errorMessage);

                }

            })
        }
    });
</script>