<div class="row box-margin">
  <div class="col-md-12">
    <h3>Subscription</h3>
    <p>Manage your RunCloud subscription here. You can always change to the free plan at any time and still enjoy Pro features until your current subscription ends. If you want to cancel your subscription, you can change it to free plan.</p>
    <table class="table">
      <thead>
        <tr>
          <th>Plan</th>
          <th>Next Billing</th>
        </tr>
      </thead>
      <tbody>
        @foreach(Auth::user()->subscription as $sub)
        <tr>
          <td>Premium</td>
          <td>{{ $sub->expire }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
    <h3>Payment History</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <table>
      
    </table>
  </div>
</div>
