@csrf
 

 <div class="form-group row">
     <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

    <div class="col-md-6">
<<<<<<< HEAD
        {!! Form::text('judul', null,['calss'=>'form-control','required','autofocus']);!!}
=======
        <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
    
     @error('judul')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>


 <div class="form-group row">
     <label for="kategori_berita_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Berita Id') }}</label>

    <div class="col-md-6">
        {!! Form::select('kategori_berita_id',$KategoriBerita,null,["class"=>"form-control","required"]) !!}
    
     @error('kategori_berita_id')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>


 <div class="form-group row">
     <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('Isi') }}</label>

<<<<<<< HEAD
=======



>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
    <div class="col-md-10">
        {!!  Form::textarea('isi', null,['class'=>'form-control']);  !!}

     @error('isi')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>



<<<<<<< HEAD
        {!! Form::hidden('users_id', Auth::id());!!}
=======
        <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autofocus>
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
    
     <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a href="{!! route('berita.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
                               
                            </div>
                        </div>
