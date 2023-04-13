<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Importar Postulantes</div>
                <div class="card-body">
                    @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        @endforeach
                    </div>
                    @endif
                    <form action="{{route('postulado.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="import_file"/>
                    <button class="btn btn-primary" type="submit">Importar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>