@extends('layouts.default')

@section('content')

    <div class="card">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form to contact site owner.</p>

        </div>
        <div class="card-body">

            <form role='form' id='contact-form' class='contact-form'  method='post' action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input type='text' class="form-control" name='name' autocomplete="off" id="Name"
                           placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email"><b>Email address</b></label>
                    <input name='email' type="email" class="form-control" id="exampleFormControlInput1"
                           placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="message"><b>Message</b></label>
                    <textarea name='body' class="form-control" id="body" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <button type='submit' class="btn btn-primary mb-2"> Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
