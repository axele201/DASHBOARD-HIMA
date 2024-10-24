<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1">
            <i class="fas fa-users"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">All Members</span>
            <span class="info-box-number">1000</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1">
            <i class="fas fa-users"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">INFORMATIKA</span>
            <span class="info-box-number">334</span>
          </div>
        </div>
      </div>
      <div class="clearfix hidden-md-up"></div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1">
            <i class="fas fa-users"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Teknologi Informasi</span>
            <span class="info-box-number">333</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1">
            <i class="fas fa-users"></i>
          </span>
          <div class="info-box-content">
            <span class="info-box-text">Sistem Informasi</span>
            <span class="info-box-number">333</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.info-box -->

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Browser Usage</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                        <li><i class="far fa-circle text-primary"></i> INFORMATIKA</li>
                        <li><i class="far fa-circle text-warning"></i> TEKNOLOGI INFORMASI</li>
                        <li><i class="far fa-circle text-success"></i> SISTEM INFORMASI</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      INFORMATIKA
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TEKNOLOGI INFORMASI
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      SISTEM INFORMASI
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            <!-- /.card -->


<div class="row">
  <div class="col-12">
    <!-- DIRECT CHAT -->
    <div class="card direct-chat direct-chat-warning">
      <div class="card-header">
        <h3 class="card-title">Direct Chat</h3>
        <div class="card-tools">
          <span title="3 New Messages" class="badge badge-warning">3</span>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
            <i class="fas fa-comments"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <!-- Conversations are loaded here -->
        <div class="direct-chat-messages">
          <!-- Message. Default to the left -->
          <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">Reja</span>
              <span class="direct-chat-timestamp float-right">17 Okt 7:00 am</span>
            </div>
            <img class="direct-chat-img" src="{{asset('img/andi.png')}}" alt="message user image">
            <div class="direct-chat-text">
              Hello develop. Is this a website that is difficult to make?
            </div>
          </div>
          <!-- Message to the right -->
          <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-right">Developer</span>
              <span class="direct-chat-timestamp float-left">17 Okt 7:00 am</span>
            </div>
            <img class="direct-chat-img" src="{{asset('img/dev.png')}}" alt="message user image">
            <div class="direct-chat-text">
              No, but I have plenty of time to make this website because I have applied for many jobs.
            </div>
          </div>
          <!-- Message. Default to the left -->
          <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">Dhila</span>
              <span class="direct-chat-timestamp float-right">17 Okt 1:07 pm</span>
            </div>
            <img class="direct-chat-img" src="{{asset('img/dhila.jpg')}}" alt="message user image">
            <div class="direct-chat-text">
              What is the purpose of creating this website?
            </div>
          </div>
          <!-- Message to the right -->
          <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-right">Developer</span>
              <span class="direct-chat-timestamp float-left">17 1:09 pm</span>
            </div>
            <img class="direct-chat-img" src="{{asset('img/dev.png')}}" alt="message user image">
            <div class="direct-chat-text">
              I created this website to make it easier for Informatics students to disseminate information related to their studies.
            </div>
          </div>
        </div>
        <!--/.direct-chat-messages-->
        <!-- /.direct-chat-pane -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <form action="#" method="post">
          <div class="input-group">
            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
            <span class="input-group-append">
              <button type="button" class="btn btn-warning">Send</button>
            </span>
          </div>
        </form>
      </div>
      <!-- /.card-footer-->
    </div>
  </div>
</div>
