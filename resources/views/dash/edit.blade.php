@extends('welcome')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{url('/')}}" class="btn btn-default">Back</a>
            </div>
            <br />
            <div class="container mr-5 pr-5">
     <form method="POST" action="{{url('update/'.$data->id)}}" enctype="multipart/form-data">
                @csrf
      <div class="form-group">
       <label class="col-md-4 text-left">Enter Title</label>
       <div class="col-md-8">
        <input type="text" name="title" value="{{ $data->first_name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
            
      <br />
      
      <br />
      <div class="form-group">
       <label class="col-md-4 text-left">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      </div>
      
 <br />
      <br /><br /><br />
      <div class="form-group text-left">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>
     </div>

@endsection