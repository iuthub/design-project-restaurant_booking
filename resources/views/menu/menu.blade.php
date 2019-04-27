<div class="menu">
    <div class="container pb-5">
        <div class="row justify-content-center pt-5 pb-3">
            <div class="col-lg-12 sec-header">
                <h1>USG Restaurant</h1>
            </div>
            <div class="col-lg-12 sec-sub-header">
                <p>Where taste meets the myth!</p>
            </div>
        </div>
        <div class="row pb-4">
            <div class="col-lg-4">
                <div class="card">
                    <img src="images/img4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 txt-center">
                                <h5 class="card-title">Lagman soup</h5>
                            </div>
                            <div class="col-lg-6">
                                <button data-toggle="modal" data-target="#details" class="btn btn-success">View details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="images/img3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 txt-center">
                                <h5 class="card-title">Lagman soup</h5>
                            </div>
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-success">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="images/img4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 txt-center">
                                <h5 class="card-title">Lagman soup</h5>
                            </div>
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-success">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                <a href="orderFood.html" target="_blank" class="btn btn-success">Save</a>
            </div>
        </div>
    </div>
</div>
