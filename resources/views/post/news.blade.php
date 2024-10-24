<div class="row" style="margin: 0; padding: 0;">
  <div class="col-md-3">
    <div class="card" style="margin-top: 10px;">
      <div class="card-header">
        <h3 class="card-title">Folders</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="fas fa-inbox"></i> Inbox
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-envelope"></i> Sent
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i> Drafts
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-9" style="display: flex; flex-direction: column;">
    <div class="card card-primary card-outline" style="flex-grow: 1; margin-bottom: 1rem;">
      <div class="card-header">
        <h3 class="card-title">Compose Mail</h3>
      </div>
      @if(auth()->user()->level == "admin")
      <form action="/kirim" method="post" style="padding: 15px;">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">From:</label>
          <input type="email" name="from" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description:</label>
          <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @endif
    </div>

    @foreach ($mails as $mail)
    <div class="card card-outline card-secondary mb-3">
      <div class="card-header">
        <h3 class="card-title">Read Mail</h3>
      </div>
      <div class="card-body">
        <div class="mailbox-read-info">
          <h5>Kepada Mahasiswa INFORMATIKA</h5>
          <h6>From: {{ $mail->from }}
            <span class="mailbox-read-time float-right">{{ $mail->created_at }}</span>
          </h6>
        </div>
        <div class="mailbox-read-message">
          <p>{{ $mail->deskripsi }}</p>
        </div>
        @if(auth()->user()->level == "admin")
        <form action="{{ route('mails.destroy', $mail->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      @endif
      </div>
    </div>
    @endforeach    
  </div>
</div>
