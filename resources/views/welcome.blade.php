@extends('layouts.master')
@section('content')
    @include('partials.header')
    @include('partials.banner')
    @include('services.services')
    <div class="menu" id="menu">
        <div class="container pb-5">
            <div class="row justify-content-center pt-5 pb-3">
                <div class="col-lg-12 sec-header">
                    <h1>USG Restaurant</h1>
                </div>
                <div class="col-lg-12 sec-sub-header">
                    <p>Where taste meets the myth!</p>
                </div>
            </div>
            <div class="row">
                <div class="section gallery-section">
                    <div class="owl-carousel gallery-slider" id="gallery-slider">
                    @foreach($menu as $item)
                        <div class="gallery-item">
                            <div class="card">
                                <img src="{{ $item->food->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 txt-center">
                                            <h5 class="card-title">{{ $item->food->name }}</h5>
                                            <span class="small">{{ $item->amount }} {{ $item->food->unit->name}}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <button class="btn btn-success btn-order">View details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <!-- Gallery End -->
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="detailsTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsTitle">Lagman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <img src="images/img4.png" class="modal_img" alt="...">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad architecto consequuntur dicta distinctio dolorem eius facere ipsa ipsam maxime nam natus non quas quia quidem reiciendis velit veniam vitae. </p>
                        </div>
                    </div>
                    <form action="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <label for="number" class="col-sm-6 col-form-label">How many people?</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="number" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">Book a table</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Delivery service</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="date" class="form-control" id="date" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="time">Time</label>
                                                <input type="time" class="form-control" id="time" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/order" target="_blank" class="btn btn-success">Order</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".btn-order").click(function(e){
            console.log(222);
            show('#details');
            e.preventDefault();
            var name = 2;
            var password = 33;
            var email = 55;
            $.ajax({
                type:'POST',
                url:'/ajaxRequest',
                data:{name:name, password:password, email:email},
                success:function(data){
                    alert(data.success);
                }
            });
        });
    </script>
    @include('partials.footer')
@endsection