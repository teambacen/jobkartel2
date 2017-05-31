<div class="row box-margin">
  <div class="col-md-4">
    <img src="http://placehold.it/200x200" class="img-circle center-block">
  </div>
  <div class="col-md-6">
    <h1 class="taknak-margin">{{ Auth::user()->name }}</h1>
    <p class="taknak-margin">Account Type : Free</p>
    <p class="taknak-margin">{{ Auth::user()->email }}</p>
    <p class="taknak-margin">Member Since {{ Auth::user()->created_at->format('d.m.Y') }}</p>
  </div>
  <div class="col-md-2">
    <a href="#" class="btn btn-jobkartel" data-toggle="modal" data-target="#edit">Edit Profile</a>
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelleby="editLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="editLabel">Edit Profile</h1>
          </div>
          <div class="modal-body">
              {{ Form::model(Auth::user()) }}
                <div class="form-group">
                  {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                  {{ Form::text('email', null, ['class' => 'form-control' , 'disabled' => true]) }}
                </div>
                <div class="form-group">
                  {{ Form::password('password', ['class' => 'form-control', 'disabled' => true, 'placeholder' => '*******']) }}
                </div>
                <div class="form-group">
                  {{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) }}
                </div>
                <div class="form-group">
                  {{ Form::file('avatar', ['class' => 'form-control']) }}
                </div>
              {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
