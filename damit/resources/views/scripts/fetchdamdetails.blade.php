@extends('layouts.app')

@section('content')

    @if(count($data["damDetails"]) > 0)
        @foreach($data["damDetails"] as $dam_details)  
           <?php $dam_details->state_name = $data["state"][$dam_details->state_id]->state_name;
            echo json_encode($dam_details); 
           ?>
        @endforeach
    @else
        <p>No user found</p>
    @endif
@endsection