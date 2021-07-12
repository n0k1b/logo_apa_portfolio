@extends('template.app')
@section('content')
<section class="about pt-100 pb-100" data-scroll-index="1">
    <div class="container">
        <form id='contact-form' action="{{ route('login') }}" method='POST'><input type='hidden' name='form-name' value='contactForm' />
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="subtitle" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="subtitle" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <!--contact button-->
                    <input type="submit" id="project-create-submit" class="div-btn" value="Login">
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
