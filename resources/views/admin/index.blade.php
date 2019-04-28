@extends('layouts.master')
@section('content')
    <div class="container pt-5">

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
                    <form>
                        <div class="form-group">
                            <label for="input">Food name</label>
                            <input type="text" class="form-control" id="input" placeholder="Lagman">
                        </div>
                        <div class="form-group">
                            <label for="input2">Description</label>
                            <textarea type="text" class="form-control" id="input2" placeholder="It is served in..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="input">Price $</label>
                            <input type="number" class="form-control" id="input" placeholder="15">
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input type="file" class="form-control-file" id="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row pt-5">
                        <div class="col-lg-12">
                            <form>
                                <div class="form-group">
                                    <label for="input">Working Days</label>
                                    <input type="text" class="form-control" id="input" placeholder="Monday...">
                                </div>
                                <div class="form-group">
                                    <label for="input">Working Hours</label>
                                    <input type="text" class="form-control" id="input" placeholder="8 am...">
                                </div>
                                <div class="form-group">
                                    <label for="input2">Morning Menu</label>
                                    <textarea type="text" class="form-control" id="input2" placeholder="It is served in..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="input2">Lunch Menu</label>
                                    <textarea type="text" class="form-control" id="input2" placeholder="It is served in..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="input2">Evening Menu</label>
                                    <textarea type="text" class="form-control" id="input2" placeholder="It is served in..."></textarea>
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