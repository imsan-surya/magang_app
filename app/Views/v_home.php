<h1>Halaman Home</h1>
<h1><?php if( session()->get('level')==1){
                    echo 'Donatur';
                  } else if(session()->get('level') == 2 ){
                    echo 'Pengadopsi';
                  } else {
                    echo 'Mitra';
                  }
                   ?></h1>
                 
