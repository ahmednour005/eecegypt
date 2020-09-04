<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/career.css')}}">
    <link rel="stylesheet" href="{{asset('css/singleCareer.css')}}">
    <title>EEC - Careers</title>
</head>

<body>
    <img class="wave"  src="{{asset('admin/assets/img/Green-Wave-PNG-Background-Image.png')}}">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://eecegypt.com"> <img src="{{asset('admin/assets/img/eecgroup-logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Career</a>
                </li>

              </ul>
              <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                <a class="nav-link" href="{{ url('/login-admin') }}">Dashboard</a>
                </li>

              </ul>
            </div>
          </nav>
<section>
    <div class="container">
        <h1>{{$career->name}}
        </h1>
        @if (Session::has('success'))
            <div class="alert alert-info">{{ Session::get('success') }}</div>
        @endif
        <div class="row">
            <div class="col-md-6">

                <div class="description">
                    <p>PRIMARY DUTIES:</p>
                    {!! $career->description !!}
                    <p>EDUCATION:</p>
                    <ul>
                        <li>{!! $career->category->description !!}</li>
                    </ul>
                    <p>EXPERIENCE:</p>
                    <ul>
                        <li>{!! $career->experience->name !!} years experience</li>
                    </ul>


                    <div class="pref">
                        <p><span>Job Location:</span>  {!! $career->location->country !!} </p>
                        <p><span> Job Type:</span> Full Time</p>
                        <p><span> Job Category:</span>  {!! $career->category->name !!}</p>
                        <p><span> Years of Experience:</span> {!! $career->experience->name !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="form">
                    <h2>Apply for this position</h2>
                    <form action="{{route('applicants.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="full-name">Full Name<span> *</span></label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span> *</span></label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone<span> *</span></label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover Letter<span> *</span></label>
                            <textarea name="cover" class="form-control" required> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="cv">Upload CV/Resume <span> *</span></label>
                            <input type="file" name="cv" required><br>
                            <span>Allowed Type(s): .pdf, .doc, .docx</span>
                        </div>
                        <input type="hidden" name="career_id" value="{{$career->id}}">
                        <input type="checkbox" name="storage" required>
                        By using this form you agree with the storage and handling of your data by this website. *
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <p>&copy; 2020 , Web Developer: ahmed nour </p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
