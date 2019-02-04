<div class="content-header">
<div class="row">
<div class="col-sm-12">
<div class="header-section">
    <h1>Berita baru</h1>
</div>
</div>
</div>
</div>
<div class="block full">
<div class="row">
<div class="col-md-12">

<form role="form" method="post">
  <div class="col-md-9">
        
            
            <div class="box-body">
                <div class="form-group">
                  <label >Judul Berita</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita">
                </div>

                    <textarea id="ckeditor" name="isi" rows="10" cols="95" class="ckeditor">
                                            
                    </textarea>
             
           
            </div>
       
    </div>
    <div class="col-md-3">

                
            
            <div class="form-group">
            </br></br></br>
                
                <select name="kat" class="form-control select2" multiple="multiple" data-placeholder="Kategori"
                        style="width: 100%;">
                  <option>Berita</option>
                  <option>Pengumuman</option>
                  <option>OSIS</option>
                  <option>Pramuka</option>
                  <option>Hasil Karya</option>
                </select>
                
              </div>
            
            <div class="box-footer with-border">
                <button type="submit" name="draf" class="btn btn-defult" > <i class="fa fa-edit"></i> Simpan</button>
              
            </div>

   
    
    </div>
  </form>

</div>
</div>
</div>


<script type="text/javascript">
  CKEDITOR.replace('ckeditor', {filebrowserBrowseUrl: 'filemanager / dialog.php? type = 2 & editor = ckeditor & fldr = ', filebrowserUploadUrl:' filemanager / dialog.php? Type = 2 & editor = ckeditor & fldr = ', filebrowserImageBrowseUrl:' filemanager / dialog.php? Type = 1 & editor = ckeditor & fldr = '});

</script>

