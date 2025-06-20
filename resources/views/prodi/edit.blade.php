
@extends('main')

@section('title', 'Program Studi')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
            {{-- form tambah prodi --}}
            <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Form Ubah Program Studi</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Prodi</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') ? old('nama') : $prodi->nama }}">
                      </div>
                      <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan</label>
                        <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') ? old('singkatan') : $prodi->singkatan }}">
                      </div>
                      <div class="mb-3">
                        <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                        <input type="text" class="form-control" name="kaprodi" value="{{ old('kaprodi') ? old('kaprodi') : $prodi->kaprodi }}">
                      </div>
                      <div class="mb-3">
                        <label for="sekretaris" class="form-label">Nama Sekretaris</label>
                        <input type="text" class="form-control" name="sekretaris" value="{{ old('sekretaris') ? old('sekretaris') : $prodi->sekretaris }}">
                      </div>
                      <div class="mb-3">
                        <label for="fakultas_id" class="form-label">Fakultas</label>
                        <select name="fakultas_id" class="form-control">
                          @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}" {{ old('fakultas_id') == $item->id ? 'selected' : ($prodi->fakultas_id == $item->id ? 'selected' : null) }}> {{ $item->nama }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Row-->
@endsection
