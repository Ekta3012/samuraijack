@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">  
                <table class="table">
                    <thead>
                      <tr>
                        <th>Doctor</th>
                        <th>Status</th>
                        <th>Availability Status</th>
                      </tr>
                    </thead>
                    <tbody>
                         @foreach($doctor as $doc)
                            
                                <tr>   

                                <td>
                                    {{ $doc->first_name .  $doc->last_name }} <a href="{{ URL::to('doctor/' . $doc->id . '/edit') }}"><button class="btn btn-primary">Edit</button></a>
                                </td>                        
                                <td>
                                    @if($doc->is_active == 0)
                                        <span>Active</span>
                                    @else 
                                        <span>Inactive</span>
                                    @endif
                                </td>
                                 @foreach($doctor_availability as $availability)
                                    @if($availability->doctor_id == $doc->id)
                                <td>                                    
                                    @if($availability->availability_status == 0 )
                                        <span>Not Available </span>
                                    @else 
                                        <span>Available</span>
                                    @endif                                    
                                </td>
                                @endif
                                 @endforeach
                              </tr>
                           
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
