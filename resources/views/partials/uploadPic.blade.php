<h3>Add a new picture</h3>
                    {!! Form::open(['url' => '/picture', 'files' => true]) !!}

                      <div class="form-group">
                        {!! Form::label('desc', 'Image description: ') !!}
                        {!! Form::textarea('desc',null,['class'=>'form-control', 'placeholder' => 'Description', 'style' => 'height:6rem;']); !!}
                      </div>


                      <div class="form-group">
                        {!! Form::label('uploadPicture', 'Choose an image') !!}
                        {!! Form::file('uploadPicture', ['class' => 'form-control-file', 'aria-describedby' => 'fileHelp']) !!}
                        <small id="fileHelp" class="form-text text-muted">This image will be shown in your feed.</small>
                      </div>

                      {!! Form::submit('Add a new picture', ['class' => 'btn btn-primary']); !!}
                    {!! Form::close() !!}