<section class="content">
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row">
        <!-- Form Column for Admin Only -->
        @if(auth()->user()->level == "admin")
        <div class="col-12 col-md-6 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill shadow-sm p-3 mb-5 bg-white rounded">
            <div class="bok">
              <form action="/kirim" method="post" enctype="multipart/form-data" class="p-4">
                @csrf
                <!-- Form input fields -->
                <div class="mb-3">
                  <label class="form-label">Status:</label>
                  <input type="text" name="status" class="form-control" placeholder="Enter status" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama:</label>
                  <input type="text" name="nama" class="form-control" placeholder="Enter name" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Tentang:</label>
                  <input type="text" name="tentang" class="form-control" placeholder="Describe yourself" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Alamat:</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Enter address" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nomor Whatsapp:</label>
                  <input type="text" name="nomor" class="form-control" placeholder="Enter WhatsApp number" required>
                </div>
                <div class="form-group">
                  <label for="foto">Foto: MAX 2MB</label>
                  <input type="file" name="foto" id="image" class="form-control-file" accept="image/*" required>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                  <label class="form-check-label" for="exampleCheck1">Agree to terms</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
        @endif
        
        <!-- Column to Display Data -->
        @if(auth()->user()->level == "user")
        <div class="col-12 col-md-6">
          <div class="grid-container" style="display: grid; grid-template-columns: repeat(3, minmax(300px, 1fr)); gap: 15px;">
            @foreach ($contacts as $contact)
            <div class="card bg-light d-flex flex-fill shadow-sm p-3 mb-5 bg-white rounded">
              <div class="card-header text-muted border-bottom-0">
                <h5>{{ $contact->status }}</h5>
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{ $contact->nama }}</b></h2>
                    <p class="text-muted text-sm"><b>About:</b> {{ $contact->tentang }}</p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small">
                        <span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{ $contact->alamat }}
                      </li>
                      <li class="small">
                        <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone: {{ $contact->nomor }}
                      </li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{ asset('storage/foto/' . $contact->foto) }}" alt="user-avatar" class="img-circle img-fluid border border-secondary">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="https://wa.me/{{ $contact->nomor }}" class="btn btn-sm btn-success">
                    <i class="fas fa-lg fa-phone" style="margin-right: 5px;"></i> Whatsapp
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</section>