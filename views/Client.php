<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <div class="mb-3">
  <label for="basic-url" class="form-label">Title</label>
  <div class="input-group">
    
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
  <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
</div>
<div class="mb-3">
  <label for="basic-url" class="form-label">description</label>
  <div class="input-group">
    
    <input type="text"name="description"class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
  <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
</div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<header class="navbar navbar-expand sticky-top bg-primary navbar-dark flex-column flex-md-row bd-navbar">
    <a class="navbar-brand mr-0 mr-md-2" href="#">
      <img class="navbar-brand--img img-thumbnail" src="https://avatars1.githubusercontent.com/u/7221389?v=4&s=32" alt="Irfan Maulana"
        title="Irfan Maulana"> Bootstrap4 Dashboard
    </a>

    <div class="navbar-nav-scroll">
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item px-2">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="#">Documentation</a>
        </li>
      </ul>
    </div>

    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

      <li class="nav-item">
        <a class="nav-link p-3">
          <i class="fa fa-envelope-o"></i>
          <span class="badge badge-danger badge-notif">6</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link p-3">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-success badge-notif">6</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <img class="rounded" src="https://avatars1.githubusercontent.com/u/7221389?v=4&s=32" alt="Irfan Maulana" title="Irfan Maulana"> mazipan
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
          <a class="dropdown-item" href="https://github.com/mazipan/bootstrap4-admin-dashboard-template">
            <i class="fa fa-github pr-2"></i> Github
          </a>
          <a class="dropdown-item" href="https://github.com/mazipan/">
            <i class="fa fa-user-o pr-2"></i> Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-cog pr-2"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-power-off pr-2"></i> Logout
          </a>
        </div>
      </li>

    </ul>

  </header>

  <div class="container-fluid">
    <div class="row">
      <aside class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">

          <h6 class="sidebar-heading">
            <span>Main Navigation</span>
          </h6>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="fa fa-tachometer"></i>
                Dashboard
                <span class="badge badge-primary">14</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forms.html">
                <i class="fa fa-pencil-square-o"></i> Forms
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ui-elements.html">
                <i class="fa fa-desktop"></i> UI Elements
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="fa fa-table"></i> Tables
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="presentations.html">
                <i class="fa fa-bar-chart"></i> Presentations
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading">
            <span>User Area</span>
          </h6>

          <ul class="nav flex-column">

            <li class="nav-item has-child">
              <a class="nav-link" href="#">
                <i class="fa fa-user-o"></i> Profile
                <span class="badge badge-primary">3</span>

                <i class="fa fa-caret-down caret float-right mt-1"></i>
              </a>

              <ul class="nav flex-column is-child">
                <li class="nav-item">
                  <a class="nav-link" href="https://github.com/mazipan" target="blank" rel="noopener">
                    <i class="fa fa-github"></i> Github
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://twitter.com/Maz_Ipan" target="blank" rel="noopener">
                    <i class="fa fa-twitter"></i> Twitter
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.facebook.com/mazipanneh" target="blank" rel="noopener">
                    <i class="fa fa-facebook"></i> Facebook
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-cog"></i> Settings
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-power-off"></i> Logout
              </a>
            </li>

          </ul>

        </div>
      </aside>
      <main class="col-md-10 ml-sm-auto col-lg-10 pt-3 px-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2"><i class="fa fa-tachometer"></i> Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">>Ajoute</button>
              <button class="btn btn-sm btn-primary">Export</button>
            </div>
            <button class="btn btn-sm btn-primary dropdown-toggle">
              <i class="fa fa-calendar"></i>
              This week
            </button>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 pr-0 mb-3">
            <div class="card text-white bg-primary">
              <div class="card-header"><i class="fa fa-shopping-bag"></i> New Orders</div>
              <div class="card-body">
                <h3 class="card-title">150</h3>
              </div>
              <a class="card-footer text-right" href="#">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 pr-0 mb-3">
            <div class="card text-white bg-success">
              <div class="card-header"><i class="fa fa-bar-chart"></i> Bounce Rate</div>
              <div class="card-body">
                <h3 class="card-title">53%</h3>
              </div>
              <a class="card-footer text-right" href="#">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 pr-0 mb-3">
            <div class="card text-white bg-warning">
              <div class="card-header"><i class="fa fa-user-plus"></i> User Registrations</div>
              <div class="card-body">
                <h3 class="card-title">44</h3>
              </div>
              <a class="card-footer text-right" href="#">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 pr-0 mb-3">
            <div class="card text-white bg-danger">
              <div class="card-header"><i class="fa fa-pie-chart"></i> Unique Visitor</div>
              <div class="card-body">
                <h3 class="card-title">65</h3>
              </div>
              <a class="card-footer text-right" href="#">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 pr-0 mb-3">
            <div class="card-collapsible card">
              <div class="card-header">
                Doughnut Chart <i class="fa fa-caret-down caret"></i>
              </div>
              <div class="card-body d-flex justify-content-around">
                  <canvas class="chart w-100" id="pieChart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pr-0 mb-3">
            <div class="card-collapsible card">
              <div class="card-header">
                Bar Chart <i class="fa fa-caret-down caret"></i>
              </div>
              <div class="card-body d-flex justify-content-around">
                  <canvas class="chart w-100" id="barChart"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 pr-0 mb-3">
            <div class="card-collapsible card">
              <div class="card-header">
                Table <i class="fa fa-caret-down caret"></i>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead class="thead bg-primary text-white">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pr-0 mb-3">
            <div class="card-collapsible card">
              <div class="card-header">
                Quick Form <i class="fa fa-caret-down caret"></i>
              </div>
              <div class="card-body">
                <form>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Assignee's email">
                    <div class="input-group-append">
                      <span class="input-group-text">@example.com</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ticket title">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" placeholder="Ticket description" cols="30" rows="5"></textarea>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">
                        <i class="fa fa-send"></i>
                        Submit Ticket
                      </button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>