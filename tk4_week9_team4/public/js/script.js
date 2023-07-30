// $(function() {

//     $('.tombolTambahData').on('click', function() {
//         $('#formModalLabel').html('Tambah Data Barang');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//         $('#nama').val('');
//         $('#nrp').val('');
//         $('#email').val('');
//         $('#jurusan').val('');
//         $('#id').val('');
//     });


//     $('.tampilModalUbah').on('click', function() {
        
//         $('#formModalLabel').html('Ubah Data Barang');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/barang/ubah');

//         const id = $(this).data('id');
        
//         $.ajax({
//             url: 'http://localhost/phpmvc/public/barang/getubah',
//             data: {id : id},
//             method: 'post',
//             dataType: 'json',
//             success: function(data) {
//                 $('#nama').val(data.nama);
//                 $('#nrp').val(data.nrp);
//                 $('#email').val(data.email);
//                 $('#jurusan').val(data.jurusan);
//                 $('#id').val(data.id);
//             }
//         });
        
//     });

// });