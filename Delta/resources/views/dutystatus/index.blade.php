@extends('includes.app')


@section('content')




<!-- Begin Page Content -->
<div class="collapse" id="NewEmployorm">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">নতুন ডিউটি</a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('duty_status.store')}}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark pl-4"> নাম</span>
                        <input type="text" name="name" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-4">Description</span>
                        <input type="text" name="description" class="form-control mb-2">
                    </div>



                    <div class="col-auto">
                        <button type="submit" class="btn bg-abasas-dark mt-3">সাবমিট</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>










<x-data-table :fieldList="$fieldList" :items="$items" :routes="$routes" :componentDetails="$componentDetails" />



<script>
    $(document).ready(function() {

        $('body').on('click', '#PlusButton', function() {



            if ($(this).hasClass('fa-plus')) {
                $(this).removeClass('fa-plus');
                $(this).addClass('fa-minus');


            } else {
                $(this).removeClass('fa-minus');
                $(this).addClass('fa-plus');

            }



        });

    });
</script>



@endsection