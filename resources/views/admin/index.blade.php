@extends('layouts.master')
@section('content')
    <div class="container pt-5">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Day Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="unit-tab" data-toggle="tab" href="#unit" role="tab" aria-controls="contact" aria-selected="false">Unit</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row pt-5">
                    <div class="col-lg-12">
                    <form method="post" action="/admin/food/create" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="input">Food name</label>
                            <input name="name" type="text" class="form-control" id="input" placeholder="Lagman">
                        </div>
                        <div class="form-group">
                            <label for="input2">Description</label>
                            <textarea name="description" type="text" class="form-control" id="input2" placeholder="It is served in..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="input">Price $</label>
                            <input name="price" type="number" class="form-control" id="input" placeholder="15">
                        </div>
                        <div class="form-group">
                            <label for="input">Unit type</label>
                            <select name="unit_type_id" class="form-control">
                                <option value="1">Test unit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input name="image" type="file" class="form-control-file" id="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row pt-5">
                        <div class="col-lg-12">
                            <form action="/admin/menu/create" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="input">Goods</label>
                                    <select class="form-control" name="food_id">
                                        @foreach($foods as $food)
                                            <option value="{{ $food['id'] }}">{{ $food['name'] }} / {{ $food['price'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="input2">Amount</label>
                                    <input name="amount" type="text" class="form-control" id="input2" placeholder="20"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row pt-5">
                        <div class="col-lg-12">
                            <form>
                                <div class="form-group">
                                    <label for="input">Phone numbers</label>
                                    <input type="text" class="form-control" id="input" placeholder="777...">
                                </div>
                                <div class="form-group">
                                    <label for="input2">Addres</label>
                                    <textarea type="text" class="form-control" id="input2" placeholder="Tashkent.."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="unit" role="tabpanel" aria-labelledby="unit-tab">
                    <div class="row pt-5">
                        <div class="col-lg-12">
                            <form action="/admin/unit/create" method="post">
                                <div class="form-group">
                                    <label for="input">Name</label>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input name="name" value="" type="text" class="form-control" id="input" placeholder="kg...">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection