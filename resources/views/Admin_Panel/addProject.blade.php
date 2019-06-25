@extends('layouts.app')

@section('css')

    <style>


    </style>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload Project</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('project.insert') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" name="name" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Select Category</label>

                                <select class="js-example-basic-multiple" name="category[]" multiple="multiple" style="width: 100%;">
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->category_id }}">{{ $cat->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Project Description</label>
                                <textarea class="form-control" name="desc"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Website Link</label>
                                <input type="text" class="form-control" name="website" placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="simpleinput">Project Photo</label>
                                {{-- ROW 1 --}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-control mb-2" name="img1" type='file' id="imgInp" onchange="readURL1(this)" required/>
                                        <img id="img1" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-2" name="img2" type='file' id="imgInp" onchange="readURL2(this)"/>
                                        <img id="img2" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-2" name="img3" type='file' id="imgInp" onchange="readURL3(this)"/>
                                        <img id="img3" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-2" name="img4" type='file' id="imgInp" onchange="readURL4(this)"/>
                                        <img id="img4" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                </div>

                                {{-- ROW 2 --}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img5" type='file' id="imgInp" onchange="readURL5(this)"/>
                                        <img id="img5" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img6" type='file' id="imgInp" onchange="readURL6(this)"/>
                                        <img id="img6" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img7" type='file' id="imgInp" onchange="readURL7(this)"/>
                                        <img id="img7" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img8" type='file' id="imgInp" onchange="readURL8(this)"/>
                                        <img id="img8" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                </div>

                                {{-- ROW 3 --}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img9" type='file' id="imgInp" onchange="readURL9(this)"/>
                                        <img id="img9" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img10" type='file' id="imgInp" onchange="readURL10(this)"/>
                                        <img id="img10" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img11" type='file' id="imgInp" onchange="readURL11(this)"/>
                                        <img id="img11" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control mb-1" name="img12" type='file' id="imgInp" onchange="readURL12(this)"/>
                                        <img id="img12" style="margin-bottom:10px;" src="#" alt="your image" width="100%;"/>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js" defer></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <script>
        document.getElementById("img1").style.visibility = "hidden";
        document.getElementById("img2").style.visibility = "hidden";
        document.getElementById("img3").style.visibility = "hidden";
        document.getElementById("img4").style.visibility = "hidden";

        document.getElementById("img5").style.visibility = "hidden";
        document.getElementById("img6").style.visibility = "hidden";
        document.getElementById("img7").style.visibility = "hidden";
        document.getElementById("img8").style.visibility = "hidden";

        document.getElementById("img9").style.visibility = "hidden";
        document.getElementById("img10").style.visibility = "hidden";
        document.getElementById("img11").style.visibility = "hidden";
        document.getElementById("img12").style.visibility = "hidden";

        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img1').attr('src', e.target.result);
                    document.getElementById("img1").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img2').attr('src', e.target.result);
                    document.getElementById("img2").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img3').attr('src', e.target.result);
                    document.getElementById("img3").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img4').attr('src', e.target.result);
                    document.getElementById("img4").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }



        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img5').attr('src', e.target.result);
                    document.getElementById("img5").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img6').attr('src', e.target.result);
                    document.getElementById("img6").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL7(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img7').attr('src', e.target.result);
                    document.getElementById("img7").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL8(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img8').attr('src', e.target.result);
                    document.getElementById("img8").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        function readURL9(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img9').attr('src', e.target.result);
                    document.getElementById("img9").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL10(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img10').attr('src', e.target.result);
                    document.getElementById("img10").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL11(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img11').attr('src', e.target.result);
                    document.getElementById("img11").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL12(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img12').attr('src', e.target.result);
                    document.getElementById("img12").style.visibility = "visible";
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection