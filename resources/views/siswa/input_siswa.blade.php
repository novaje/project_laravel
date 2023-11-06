<x-layout-component>
    <h1>
        Pendaftaran Siswa
    </h1>
    <form action="{{ route('siswa.store') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="">Nama Siswa</label>
            <input type="text" name="nm_siswa" id="" style="width:300px" class="form-control">
        </div>
        <div class="form-group">
            <label for="">NISN</label>
            <input type="number" name="nisn" id="" style="width:300px" class="form-control">
        </div>
        <div class="div-form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" id="" style="width:300px" class="form-control">
        </div>
        <div class="div-form-group">
            <label for="">Jenis Kelamin</label> <br>
            <input type="radio" name="jns_kelamin" id="" value="L">Laki-Laki <br>
            <input type="radio" name="jns_kelamin" id="" value="P">Perempuan
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
    </form>
    
</x-layout-component>