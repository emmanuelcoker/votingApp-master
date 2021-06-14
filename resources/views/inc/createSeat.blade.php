<form action="{{route('seat')}}" method="POST" class="contact">
    {{ csrf_field() }}    
        
            <div class="form-group">
                {{Form::label('Seat')}}
                {{Form::text('seat','',['class' => 'form-control','placeholder' => 'Seat','required','style'=>'max-width:100%; width:500px'])}}
            </div>
            
            {{Form::submit('Add Seat',['class'=>'btn btn-primary btn-flat btn-sm'])}}
    </form>
        
    