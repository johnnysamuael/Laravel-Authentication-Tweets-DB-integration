@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recent Update') }}</div>
                   <div class="card-body">
                    <form action="" method="post">
                    <textarea name="body" id="" rows="3" class="form-control" placeholder="Whats on your mind?"></textarea>
                    <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                    </div>
                    <hr>
                <div class="card-body">
                   @foreach($messages as $message)
               
                  
                   {{$message->body;}}
                   <br>
                   <small>{{\Carbon\Carbon::parse($message->created_at)->format('d/m/Y')}}</small>
                    <hr>
                    @endforeach           </div>
            </div>
        </div>
    </div>
</div>
@endsection
