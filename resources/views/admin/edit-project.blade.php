@extends('template.app')
@section('content')
<section class="about pt-100 pb-100" data-scroll-index="1">
    <div class="container">
        <form id='contact-form' action="{{ route('edit-project') }}" method='POST' enctype="multipart/form-data"><input type='hidden' name='form-name' value='contactForm' />
            @csrf
            <input type="hidden" value={{$project->id}} name="id">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{ $project->title }}" name="title" class="form-control" id="title" placeholder="Title *" required="required">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{ $project->subtitle }}" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea rows="6" name="description" class="form-control" id="description" placeholder="Message *" required="required">{{ $project->description }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend2">Completed At</span>
                        </div>
                        <input type="date" value={{ $project->completed_at }} class="form-control" name="completed_at" id="validationDefaultUsername" placeholder="Completed At" aria-describedby="inputGroupPrepend2">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="file" name="image" class="form-control" id="subtitle" placeholder="Featured Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="js-example-basic-single" name="type">
                        @foreach ($types as $type)
                        <?php $selected = '';
                            if($project->type_id === $type->id) {
                                $selected = 'selected';
                            }
                            ?>
                            <option value={{$type->id}} {{$selected}}>{{ $type->name }}</option>
                        @endforeach                        
                      </select>
                </div>
                <div class="col-md-12 text-center">
                    <!--contact button-->
                    <input type="submit" id="project-create-submit" class="div-btn" value="Update">
                </div>
            </div>
        </form>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>
</section>
<section>
    <div class="container">
        <center><h2 class="display-6 mb-2">All Projects</h2></center>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">SubTitle</th>
                <th scope="col">Type</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $index=>$pr)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td>{{ $pr->title }}</td>
                    <td>{{ $pr->subtitle }}</td>
                    <td>{{ $pr->type->name }}</td>
                    <td><a href="{{ route('delete-project', ['id' => $pr->id]) }}" class="text-danger">Delete</a></td>
                    <td><a href="">Edit</a></td>
                </tr>
                @endforeach
                
            </tbody>
          </table>
    </div>
</section>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection