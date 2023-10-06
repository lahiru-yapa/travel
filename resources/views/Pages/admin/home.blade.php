@extends('Pages.admin.Layout.app')
@section('content')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add Hotel</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Add Tour Details</h2>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Listing Information</h4>
                        </div>
                        <div class="bor">
                            <form method="POST" action="{{ route('create_tour') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="title">
                                        <label for="list-title">Title</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="list-name" type="text" class="validate" name="days">
                                        <label for="list-name">days</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="location_map_link"></textarea>
                                        <label for="textarea1">location_map_link</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="location"></textarea>
                                        <label for="textarea1">location</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="textarea1" class="m_bottom">Tour plan</label>
                                        <textarea name="tour_plan"></textarea>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="textarea1" class="m_bottom">Included</label>
                                        <textarea name="Included"></textarea>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="textarea1" class="m_bottom">Excluded</label>
                                        <textarea name="excluded"></textarea>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="group_size"></textarea>
                                        <label for="textarea1">group_size</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="destination_details_main_image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"
                                                    placeholder="Upload destination 860*450">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s6">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="home_image">
                                                <!-- Added the name attribute -->
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="home 308*200">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="destination">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"
                                                    placeholder="Upload destination 308*375">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s6">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="destination_details[]" accept="image/*"
                                                    multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"
                                                    placeholder="Upload destination details">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary add-row">Add Row</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">

                                        <input id="list-name" type="text" class="validate" name="price">
                                        <label for="list-name">price</label>


                                    </div>
                                    <div class="input-field col s6">
                                        <div class="input-field col s6">
                                            <select name="category">
                                                <option value="">Choose Category</option>
                                                <option value="1">Hiking and Trekking</option>
                                                <option value="2">Mountain Abseiling </option>
                                                <option value="3">Waterfall Abseiling </option>
                                                <option value="4">Kayaking</option>
                                                <option value="5">Surfing</option>
                                                <option value="6">Water Rafting</option>
                                                <option value="7">Gutsy girls (girls only
                                                    hike/ abseil)</option>
                                                <option value="8">Couple Tours</option>
                                                <option value="9">Village Tours</option>
                                            </select>
                                            <label>Select Category</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="textarea1" class="m_bottom">Description</label>
                                            <textarea name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    ====================

                                    <h3 style='display:inline'>Chapter 1: </h3>

                                    <textarea class="ckeditor" onChange="editing('Chapter 1');" name="editor0"></textarea>
                                    <?php for ($i = 2; $i <= 10; $i++) {
                                        echo "<div id='div_editor_" . $i . "' style='display:none;'><textarea id='editor_" . $i . "' name='editor" . $i . "'></textarea></div>";
                                    } ?>
                                    <br><br>
                                    <input type="button" onclick="createEditor();" value=" Add chapter ">
                                    <br><br>

                                    ==========
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous">
    </script>

    <script>
        CKEDITOR.replace('description')
        CKEDITOR.replace('Included');
        CKEDITOR.replace('excluded');
        CKEDITOR.replace('tour_plan');
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-o6R6y5F5tC+TtGj4KGf3CpUJfB/U4t3flq6yoY6/cCf52NTbWw6HlI5OIXe5x9It" crossorigin="anonymous">
    </script>

    <script>
        function toggle_visibility(id) {
            var element = document.getElementById(id);
            if (element.style.display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }



        num_chapter = 2;
        var editor = new Array();

        function createEditor() {
            if (num_chapter <= 10) {
                toggle_visibility('div_editor_' + num_chapter);

                document.getElementById('div_editor_' + num_chapter).insertAdjacentHTML("afterbegin",
                    "<br><br><h3 style='display:inline'>Chapter " + num_chapter +
                    ": </h3><br><br>");

                // Create a new editor inside the <div id="editor">, setting its value to html
                CKEDITOR.replace('editor_' + num_chapter);

                num_chapter += 1;
            } else {
                alert("Sorry, maximum is 10 chapters.");
            }
        }
    </script>
@endsection
