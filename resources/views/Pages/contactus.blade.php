@extends('Layout.contactlayout')

@section('content')

<div class="p-4 row">
    <div class="row contactheader">
        <div class="col">
            <h1>Contact Us</h1>
        </div>
    </div>

    <div class="formcontainer">
        <form class="p-4 form">
            <div class="mb-3">
              <label for="InputFullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="InputFullName" aria-describedby="FullName">
            </div>
            <div class="mb-3">
              <label for="InputEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="InputEmail" aria-describedby="Email">
            </div>

            <div class="mb-3">
                <label for="Messagetextarea" class="form-label">Message</label>
                <textarea class="form-control" id="Messagetextarea" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
    </div>

</div>

@endsection
