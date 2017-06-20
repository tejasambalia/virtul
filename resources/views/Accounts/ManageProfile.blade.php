
{!! Form::model($userprofile, ['action' => ['UsersController@manageProfile', $userprofile->userId]]) !!}
 <div class="form-group">

       {!! Form::label('Contact', 'Contact') !!}
       {{ Form::text('Contact', null, ['class' => 'form-control']) }}
     </div>

     <div class="form-group">
       {!! Form::label('DOB', 'Date of Birth') !!}
       {!! Form::text('DOB', null, ['class' => 'form-control']) !!}
     </div>

     <div class="form-group">
       {!! Form::label('fbLink', 'FaceBook Link') !!}
       {!! Form::text('fbLink', null, ['class' => 'form-control']) !!}
     </div>

      <div class="form-group">
       {!! Form::label('instaLink', 'Instagram Link') !!}
       {!! Form::text('instaLink', null, ['class' => 'form-control']) !!}
     </div>

      <div class="form-group">    
         {!! Form::label('pinterestLink', 'Pinterest Link') !!}
       {!! Form::text('pinterestLink', null, ['class' => 'form-control']) !!}
     </div>

      <div class="form-group">
       {!! Form::label('twitterLink', 'Twitter Link') !!}
       {!! Form::text('twitterLink', null, ['class' => 'form-control']) !!}
     </div>

     <div class="form-group">
       {!! Form::label('website', 'Website') !!}
       {!! Form::text('website', null, ['class' => 'form-control']) !!}
     </div>

     <div class="form-group">
       {!! Form::label('profilePicture', 'Profile Picture') !!}
       {!! Form::file('profilePicture', null, ['class' => 'form-control']) !!}
     </div>

     <button class="btn btn-success" type="submit">Update profile</button>

{!! Form::close() !!}

