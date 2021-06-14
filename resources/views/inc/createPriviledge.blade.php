<form action="{{route('priviledge')}}" method="POST" class="contact">
    {{ csrf_field() }}    
        
            <div class="form-group">
                {{Form::label('Priviledge','Priviledge')}}
                {{Form::text('priviledge','',['class' => 'form-control','placeholder' => 'Priviledge','required','style'=>'max-width:100%; width:500px'])}}
            </div>
            
            {{Form::submit('Add Priviledge',['class'=>'btn btn-primary btn-flat btn-sm'])}}
    </form>
        
    