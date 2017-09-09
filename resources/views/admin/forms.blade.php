@extends('layouts.admin')

@section('title', 'Forms')

@section('content')
    <main class="admin-main">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Forms</h4>
                </div>

                <form class="col s6">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                            <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            This is an inline input field:
                            <div class="input-field inline">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </div>
                </form>

                <form class="col s6">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Textarea</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">First Name</label>
                        </div>
                    </div>
                </form>


                <form class="col s6">
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Materialize Select</label>
                    </div>

                    <div class="input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Materialize Multiple Select</label>
                    </div>

                    <div class="input-field col s12">
                        <select>
                            <optgroup label="team 1">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </optgroup>
                            <optgroup label="team 2">
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </optgroup>
                        </select>
                        <label>Optgroups</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <select class="icons">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="" data-icon="images/sample-1.jpg" class="circle">example 1</option>
                            <option value="" data-icon="images/office.jpg" class="circle">example 2</option>
                            <option value="" data-icon="images/yuna.jpg" class="circle">example 3</option>
                        </select>
                        <label>Images in select</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select class="icons">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="" data-icon="images/sample-1.jpg" class="left circle">example 1</option>
                            <option value="" data-icon="images/office.jpg" class="left circle">example 2</option>
                            <option value="" data-icon="images/yuna.jpg" class="left circle">example 3</option>
                        </select>
                        <label>Images in select</label>
                    </div>

                    <label>Browser Select</label>
                    <select class="browser-default">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </form>
            </div>
        </div>
    </main>
@endsection

