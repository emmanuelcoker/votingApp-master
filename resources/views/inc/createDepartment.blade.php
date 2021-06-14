<form action="{{route('department')}}" method="POST" class="contact">
    {{ csrf_field() }}    
        
            <div class="form-group">
                {{Form::label('Department')}}
                {{Form::text('department','',['class' => 'form-control','placeholder' => 'Department','required','style'=>'max-width:100%; width:500px'])}}
            </div>

            <div class="form-group">
                <select name="faculty" class="form-control" id="faculty">
                    <option value="0">None</option>
                    @foreach($faculties as $faculty)
                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                    @endforeach
                </select>
            </div>
            
            {{Form::submit('Add Department',['class'=>'btn btn-primary btn-flat btn-sm'])}}
    </form>
        
    