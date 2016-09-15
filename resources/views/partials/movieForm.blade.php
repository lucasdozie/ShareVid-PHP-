			<div class="form-group">
                {!!Form::label('Title')!!}
                {!!Form::text('title', null,array('required','class'=>'form-control'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('Video Link')!!}
                {!!Form::text('link',null,array ('required','class' => 'form-control'))!!}
            </div>
             </div>
             <div class="form-group">
                {!!Form::label('Movie Category')!!}
                {!!Form::select('category', array('Drama' => 'Drama', 'Action' => 'Action', 'thriller' => 'thriller', 'C' => 'comedy'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('Movie Rating')!!}
                {!!Form::text('rating',null,array ('required','class' => 'form-control'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('Description')!!}
                {!!Form::textarea('description',null,array ('required','class' => 'form-control'))!!}
            </div>
            <div class="form-group">
                {!!Form::label('Upload a cover photo')!!}
                {!!Form::file('image',null,array ('required','class' => 'form-control'))!!}
            </div>
            <div class="form-group">
                {!! Form::label ('Upload your Video') !!}
                {!! Form::file('video',null,array ('required','class' => 'form-control',)) !!}
            </div>
            <div class="form-group">
                {!!Form::submit('Upload!', array('class' => 'btn btn-primary')) !!}
            </div>

