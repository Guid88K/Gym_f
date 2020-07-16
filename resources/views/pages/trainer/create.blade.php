@extends('pages.layouts')
@section('content')
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">
                <i class="fa fa-plus text-muted mr-5"></i> Add New Program
            </h2>
            <h3 class="h5 text-muted mb-0">
                This is the 7th property you are adding to your portfolio.
            </h3>
        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content">
                <form action="{{route('programs.store')}}" method="POST" enctype="multipart/form-data" >
                    <!-- Photos -->
                    <h2 class="content-heading text-black">Photos</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Add nice and clean photos to better showcase your property
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <div class="custom-file form">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                    @csrf
                                    <input type="file" class="custom-file-input" id="re-listing-photos" name="image" data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="re-listing-photos">Choose files</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Photos -->

                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Vital Info</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Pay extra attention since this is the data which customers will see first.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">

                                <label for="re-listing-name">Name</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-name" name="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="re-listing-address">Count day in week</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-address" name="cout_week" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="re-listing-address">Period</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-address" name="period" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="re-listing-description">Description</label>
                                <textarea class="form-control form-control-lg" id="re-listing-description" name="desc" rows="8" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="re-listing-description">Kind</label>
                                    <input
                                    type="text" class="form-control" list="kind"
                                    aria-label="Text input with checkbox" name="kind"/>

                                <datalist id="kind">
                                    @foreach($kind as $i)
                                        <option value="{{$i->name}}">{{$i->name}}</option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <label for="re-listing-price">Price</label>
                                    <input type="text" class="form-control form-control-lg" id="re-listing-price" name="price" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Additional Info -->
{{--                    <h2 class="content-heading text-black">Additional Info</h2>--}}
{{--                    <div class="row items-push">--}}
{{--                        <div class="col-lg-3">--}}
{{--                            <p class="text-muted">--}}
{{--                                Add more details to make your property more appealing and interesting--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-7 offset-lg-1">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="re-listing-description">Description</label>--}}
{{--                                <textarea class="form-control form-control-lg" id="re-listing-description" name="re-listing-description" rows="8" placeholder="How old is it? Which are its key features?"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for="re-listing-bedrooms">Bedrooms</label>--}}
{{--                                    <select class="form-control form-control-lg" id="re-listing-bedrooms" name="re-listing-bedrooms">--}}
{{--                                        <option value="0">Please select</option>--}}
{{--                                        <option value="1">1</option>--}}
{{--                                        <option value="2">2</option>--}}
{{--                                        <option value="3">3</option>--}}
{{--                                        <option value="4">4</option>--}}
{{--                                        <option value="5">5</option>--}}
{{--                                        <option value="6">6</option>--}}
{{--                                        <option value="7">7</option>--}}
{{--                                        <option value="8">8</option>--}}
{{--                                        <option value="9">9</option>--}}
{{--                                        <option value="10plus">10+</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for="re-listing-bathrooms">Bathrooms</label>--}}
{{--                                    <select class="form-control form-control-lg" id="re-listing-bathrooms" name="re-listing-bathrooms">--}}
{{--                                        <option value="0">Please select</option>--}}
{{--                                        <option value="1">1</option>--}}
{{--                                        <option value="2">2</option>--}}
{{--                                        <option value="3">3</option>--}}
{{--                                        <option value="4">4</option>--}}
{{--                                        <option value="5">5</option>--}}
{{--                                        <option value="6">6</option>--}}
{{--                                        <option value="7">7</option>--}}
{{--                                        <option value="8">8</option>--}}
{{--                                        <option value="9">9</option>--}}
{{--                                        <option value="10plus">10+</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for="re-listing-parking">Parking</label>--}}
{{--                                    <select class="form-control form-control-lg" id="re-listing-parking" name="re-listing-parking">--}}
{{--                                        <option value="0">Please select</option>--}}
{{--                                        <option value="1">1</option>--}}
{{--                                        <option value="2">2</option>--}}
{{--                                        <option value="3">3</option>--}}
{{--                                        <option value="4">4</option>--}}
{{--                                        <option value="5">5</option>--}}
{{--                                        <option value="6">6</option>--}}
{{--                                        <option value="7">7</option>--}}
{{--                                        <option value="8">8</option>--}}
{{--                                        <option value="9">9</option>--}}
{{--                                        <option value="10plus">10+</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for="re-listing-heating">Heating</label>--}}
{{--                                    <select class="form-control form-control-lg" id="re-listing-heating" name="re-listing-heating">--}}
{{--                                        <option value="0">Please select</option>--}}
{{--                                        <option value="electricity">Electricity</option>--}}
{{--                                        <option value="gas">Gas</option>--}}
{{--                                        <option value="unavailable">Unavailable</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for="re-listing-size">Size (in sq.ft.)</label>--}}
{{--                                    <input type="text" class="form-control form-control-lg" id="re-listing-size" name="re-listing-size" placeholder="eg 300">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- END Additional Info -->

                    <!-- Contact Info -->
{{--                    <h2 class="content-heading text-black">Contact Info</h2>--}}
{{--                    <div class="row items-push">--}}
{{--                        <div class="col-lg-3">--}}
{{--                            <p class="text-muted">--}}
{{--                                How can your customers reach you?--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-7 offset-lg-1">--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for="re-listing-email">Email</label>--}}
{{--                                    <input type="text" class="form-control form-control-lg" id="re-listing-email" name="re-listing-email">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for="re-listing-phone">Phone</label>--}}
{{--                                    <input type="text" class="form-control form-control-lg" id="re-listing-phone" name="re-listing-phone">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- END Contact Info -->

                    <!-- Form Submission -->
                    <div class="row items-push">
                        <div class="col-lg-7 offset-lg-4 text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i>
                                    Add Listing
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Form Submission -->
                </form>
            </div>
        </div>
    </div>
@endsection
