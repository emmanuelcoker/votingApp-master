<form action="{{route('register')}}" method="POST" class="contact">
    {{ csrf_field() }}    
        <div class="form-group">
                {{Form::label('Matric Number','Matric Number')}}
                {{Form::text('regno',$user->regno,['class' => 'form-control','placeholder' => 'Matric Number','required','style'=>'max-width:100%; width:500px'])}}
            </div>
        
            <div class="form-group">
                {{Form::label('Student Name','Student Name')}}
                {{Form::text('name',$user->name,['class' => 'form-control','placeholder' => 'Student Name','required','style'=>'max-width:100%; width:500px'])}}
            </div>
        
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="department">Department</label>  
                      <select name="dept" id="dept" class="form-control" style="max-width: 100%; width:800px;">
                        <option value="0">None</option>
                          @foreach ($departments as $department)
                              <option class="p-2 bg-light"value="{{$department->name}}">{{$department->name}}</option>
                          @endforeach
                      </select>
                    
                 </div>
    
                 <div class="form-group col-md-6">
                    <label for="faculty">Faculty</label>  
                      <select name="faculty" id="" class="form-control" style="max-width: 100%; width:800px;">
                        <option value="0">None</option>
                          @foreach ($faculties as $faculty)
                              <option class="p-2 bg-light"value="{{$faculty->name}}">{{$faculty->name}}</option>
                          @endforeach
                      </select>
                    
                 </div>
             
                
            </div>
            {{Form::submit('Update Student',['class'=>'btn btn-primary btn-flat btn-sm'])}}
    </form>
        
    