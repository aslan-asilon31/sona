@extends('layouts.backend')

@section('title','Allotment')

@section('content')
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- ./col -->
              </div>
              <!-- /.row -->
              <!-- Main row -->
              <div class="row" style="display:flex;">
                  <!-- Left col -->
                  <section class="col-lg-6">
                      <div class="card">
                              <!-- Calendar -->
                              <div class="card bg-gradient-success">
                                  <div class="card-header border-0">
                  
                                  <h3 class="card-title">
                                      <i class="far fa-calendar-alt"></i>
                                      Calendar
                                  </h3>
                                  <!-- tools card -->
                                  <div class="card-tools">
                                      <!-- button with a dropdown -->
                                      <div class="btn-group">
                                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                          <i class="fas fa-bars"></i>
                                      </button>
                                      <div class="dropdown-menu" role="menu">
                                          <a href="#" class="dropdown-item">Add new event</a>
                                          <a href="#" class="dropdown-item">Clear events</a>
                                          <div class="dropdown-divider"></div>
                                          <a href="#" class="dropdown-item">View calendar</a>
                                      </div>
                                      </div>
                                      <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                      </button>
                                      <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                      </button>
                                  </div>
                                  <!-- /. tools -->
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body pt-0">
                                  <!--The calendar -->
                                  <div id="calendar" style="width: 100%"></div>
                                  </div>
                                  <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                      </div>
                  </section>
                  <section class="col-lg-6">
                      <div class="card">
                          <!-- general form elements -->
                          <div class="card card-primary">
                              <div class="card-header">
                              <h3 class="card-title">Set Allotment</h3>
                              </div>
                              <!-- /.card-header -->
                              <!-- form start -->
                              <form>
                                  <div class="card-body">
                                      <div class="form-group">
                                      <label for="exampleInputEmail1">Room Type</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                      </div>

                                      <div class="form-group">
                                        <label>Select Rate Plan</label>
                                        <select class="form-control">
                                          <option>option 1</option>
                                          <option>option 2</option>
                                          <option>option 3</option>
                                          <option>option 4</option>
                                          <option>option 5</option>
                                        </select>
                                      </div>

                                      <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <div class="input-group">
                                          <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                          <div class="input-group-append">
                                          <span class="input-group-text">Upload</span>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                      </div>
                                  </div>
                                  <!-- /.card-body -->
              
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </section>
                  <section class="col-lg-7 connectedSortable" hidden>
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-chart-pie mr-1"></i>
                          Sales
                        </h3>
                        <div class="card-tools">
                          <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                              <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                            </li>
                          </ul>
                        </div>
                      </div><!-- /.card-header -->
                      <div class="card-body">
                        <div class="tab-content p-0">
                          <!-- Morris chart - Sales -->
                          <div class="chart tab-pane active" id="revenue-chart"
                               style="position: relative; height: 300px;">
                              <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                           </div>
                          <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                          </div>
                        </div>
                      </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
        
                  </section>
                  <!-- /.Left col -->
                  <!-- right col (We are only adding the ID to make the widgets sortable)-->
                  <section class="col-lg-5 connectedSortable" hidden>
        
                    <!-- Map card -->
                    <div class="card bg-gradient-primary" >
                      <div class="card-header border-0">
                        <h3 class="card-title">
                          <i class="fas fa-map-marker-alt mr-1"></i>
                          Visitors
                        </h3>
                        <!-- card tools -->
                        <div class="card-tools">
                          <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                            <i class="far fa-calendar-alt"></i>
                          </button>
                          <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <div class="card-body">
                        <div id="world-map" style="height: 250px; width: 100%;"></div>
                      </div>
                      <!-- /.card-body-->
                      <div class="card-footer bg-transparent">
                        <div class="row">
                          <div class="col-4 text-center">
                            <div id="sparkline-1"></div>
                            <div class="text-white">Visitors</div>
                          </div>
                          <!-- ./col -->
                          <div class="col-4 text-center">
                            <div id="sparkline-2"></div>
                            <div class="text-white">Online</div>
                          </div>
                          <!-- ./col -->
                          <div class="col-4 text-center">
                            <div id="sparkline-3"></div>
                            <div class="text-white">Sales</div>
                          </div>
                          <!-- ./col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.card -->
        

        
                  </section>
                  <!-- right col -->
              </div>
              <!-- /.row (main row) -->
@endsection