<form action="{{route('faculty')}}" method="POST" class="contact">
    {{ csrf_field() }}    
        
            <div class="form-group">
                {{Form::label('Faculty')}}
                {{Form::text('faculty','',['class' => 'form-control','placeholder' => 'Faculty','required','style'=>'max-width:100%; width:500px'])}}
            </div>
            
            {{Form::submit('Add Faculty',['class'=>'btn btn-primary btn-flat btn-sm'])}}
    </form>
        
    