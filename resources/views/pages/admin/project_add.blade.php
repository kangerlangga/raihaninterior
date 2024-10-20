<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')
</head>

@section('content')
<style>
@media (max-width: 768px) {
    .page-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .breadcrumbs {
        padding-left: 0 !important;
        margin-left: 0 !important;
    }
}
</style>
<div class="wrapper">
    <div class="main-header">
        @include('layouts.admin.nav')
    </div>
    @include('layouts.admin.sidebar')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">{{ $judul }}</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group @error('Images') has-error has-feedback @enderror">
                                            <label for="Images">
                                                Image Project (PNG, JPG, JPEG)
                                                <span class="d-sm-none"><br></span>
                                                <span style="color: red;">Max 3 MB</span>
                                                <span class="d-none d-sm-inline"> | </span>
                                                <span class="d-sm-none"><br></span>
                                                Standard Size 500px x 600px
                                            </label>
											<input type="file" class="form-control-file" id="Images" name="Images" accept=".png, .jpg, .jpeg" required>
                                            @error('Images')
                                            <small id="Images" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('Name') has-error has-feedback @enderror">
                                            <label for="Name">Name Project</label>
                                            <input type="text" id="Name" name="Name" value="{{ old('Name') }}" class="form-control" required>
                                            @error('Name')
                                            <small id="Name" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('Title') has-error has-feedback @enderror">
                                            <label for="Title">Title</label>
                                            <input type="text" id="Title" name="Title" value="{{ old('Title') }}" class="form-control" required>
                                            @error('Title')
                                            <small id="Title" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group @error('Desc') has-error has-feedback @enderror">
                                            <label for="Desc">Description</label>
                                            <textarea class="form-control" id="Desc" name="Desc" rows="3" required>{{ old('Desc') }}</textarea>
                                            @error('Desc')
                                            <small id="Desc" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('PoinA') has-error has-feedback @enderror">
                                            <label for="PoinA">Poin A Information</label>
                                            <input type="text" id="PoinA" name="PoinA" value="{{ old('PoinA') }}" class="form-control" required>
                                            @error('PoinA')
                                            <small id="PoinA" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('PoinB') has-error has-feedback @enderror">
                                            <label for="PoinB">Poin B Information</label>
                                            <input type="text" id="PoinB" name="PoinB" value="{{ old('PoinB') }}" class="form-control" required>
                                            @error('PoinB')
                                            <small id="PoinB" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('PoinC') has-error has-feedback @enderror">
                                            <label for="PoinC">Poin C Information</label>
                                            <input type="text" id="PoinC" name="PoinC" value="{{ old('PoinC') }}" class="form-control" required>
                                            @error('PoinC')
                                            <small id="PoinC" class="form-text text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary fw-bold text-uppercase">
                                                <i class="fas fa-save mr-2"></i>Save
                                            </button>
                                            <button type="reset" class="btn btn-warning fw-bold text-uppercase">
                                                <i class="fas fa-undo mr-2"></i>Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.admin.footer')
    </div>
</div>
@include('layouts.admin.script')
<script>
    //message with sweetalert
    @if(session('success'))
    Swal.fire({
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 3000
    });
    @elseif(session('error'))
    Swal.fire({
        icon: "error",
        title: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 3000
    });
    @endif
</script>
@endsection

<body>
    @yield('content')
</body>
</html>
