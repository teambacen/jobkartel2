<div class="col-md-8 bg-white">
  <div class="row resume-border">
    <div class="col-md-2">
      <img src="http://placehold.it/150x150">
    </div>
    <div class="col-md-10">
      <h3 class="resume-name">{{ Auth::user()->detail->first }} {{ Auth::user()->detail->last }}</h3>
      <p>{{ Auth::user()->detail->position }}</p>
      <p><i class="fa fa-phone" aria-hidden="true"></i>  {{ Auth::user()->contact->phone }} | <i class="fa fa-envelope" aria-hidden="true"></i> {{ Auth::user()->contact->email }}</p>
    </div>
    <hr>
  </div>
  <div class="row resume-border">
    <div class="col-md-12">
      <h4>Experience</h4>
      <table class="table">
        @foreach(Auth::user()->work as $work)
        <tr>
          <td class="col-sm-2">
            <h4 class="resume-name">{{ $work->start_year }} - {{ $work->end_year }}</h4>
            <h5>{{ $work->end_year - $work->start_year}} Year Experience</h5>
          </td>
          <td>
            <h4 class="resume-name">{{ $work->position }} , {{ $work->state }}</h4>
            <h5>{{ $work->company }}</h5>
            <p class="resume-description">{{ $work->work_description }}</p>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  <div class="row resume-border">
    <div class="col-md-12">
      <h4>Education</h4>
      <table class="table">
        @foreach(Auth::user()->education as $edu)
        <tr>
          <td class="col-sm-2">
            <h4 class="resume-name">{{ $edu->graduate_year }}</h4>
          </td>
          <td>
            <h4 class="resume-name">{{ $edu->institute }}</h4>
            <h5>{{ $edu->qualification }}</h5>
            <p class="resume-description">{{ $work->grade }}</p>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
