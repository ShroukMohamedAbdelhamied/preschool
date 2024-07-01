<!DOCTYPE html>
<html lang="en">
  <head>
  @include('dashboard.includesdash.head')
  </head>
  <body>
    
      @include('dashboard.includesdash.sideBar')

      @include('dashboard.includesdash.navBar')

      <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Classes Tables</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home {{request()->is('main') ? 'active' : '' }}">
                  <a href="{{ route('main') }}">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item {{request()->is('course') ? 'active' : '' }}">
                  <a href="{{ route ('course') }}">Classes</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route ('teachers') }}">Teachers</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>Class Name</th>
                            <th>Class Teacher</th>
                            <th>Teacher Title </th>
                            <th>Teacher Image</th>
                            <th>Class Price</th>
                            <th>Child Age</th>
                            <th>DATE & TIME</th>
                            <th>Capacity</th>

                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                          <th>Class Name</th>
                            <th>Class Teacher</th>
                            <th>Teacher Title </th>
                            <th>Teacher Image</th>
                            <th>Class Price</th>
                            <th>Child Age</th>
                            <th>DATE & TIME</th>
                            <th>Capacity</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>Art & Drawing</td>
                            <td>Jimmy Denis</td>
                            <td>Edinburgh</td>
                            <td><div class="d-flex align-items-center">
                            <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 45px; height: 45px;">
                            <div class="ms-3"></td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                          </tr>
                          <tr>
                            <td>Color Management</td>
                            <td>Chandra Felix</td>
                            <td>Tokyo</td>
                            <td><div class="d-flex align-items-center">
                            <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 45px; height: 45px;">
                            <div class="ms-3"></td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td>2011/07/25</td>
                            <td>$320,800</td>
                          </tr>
                          <tr>
                            <td>Athletic & Dance</td>
                            <td>Talha</td>
                            <td>San Francisco</td>
                            <td><div class="d-flex align-items-center">
                            <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 45px; height: 45px;">
                            <div class="ms-3"></td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                            <td>2009/01/12</td>
                            <td>$320,800</td>
                          </tr>
                          <tr>
                            <td>Language & Speaking</td>
                            <td>Chad</td>
                            <td>Edinburgh</td>
                            <td><div class="d-flex align-items-center">
                            <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 45px; height: 45px;">
                            <div class="ms-3"></td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                            <td>2012/03/29</td>
                            <td>$320,800</td>
                          </tr>
                          <tr>
                            <td>Religion & History</td>
                            <td>Hizrian</td>
                            <td>Tokyo</td>
                            <td><div class="d-flex align-items-center">
                            <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 45px; height: 45px;">
                            <div class="ms-3"></td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                            <td>2008/11/28</td>
                            <td>$320,800</td>
                          </tr>
                          <tr>
                            <td>General Knowledge</td>
                            <td>Farrah</td>
                            <td>New York</td>
                            <td><div class="d-flex align-items-center">
                            <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 45px; height: 45px;">
                            <div class="ms-3"></td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                            <td>2012/12/02</td>
                            <td>$320,800</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
</body>
</html>

