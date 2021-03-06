<style type="text/css">
      .product-thumb .price {
          text-align: center;
      }
      </style>    
    </div>
  </div>
</div>
<!-- end content-->   
  
  <!--Footer Start-->
  <footer id="footer">
    <div class="fpart-first">
      <div class="container">
        <div class="row">
          <div class="contact col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h5>Info Kontak</h5>
            <ul>
              <li class="address">
                
                  <p>Ukhwah Store</p>
                
              </li>
              <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="kontak-kami">Kontak Kami</a>
            </ul>
          </div>
          <div class="column col-lg-4 col-md-4 col-sm-3 col-xs-12">
            <div class="column col-md-12 col-sm-12 col-xs-12">
                <h5>Syarat &amp; Ketentuan</h5>
                <ul>
                  <li><a href="cara-pemesanan">Cara Pemesanan</a></li>
                  <!-- <li><a href="cara-gabung">Cara Gabung</a></li> -->
                </ul>
            </div>
            <div class="column col-md-12 col-sm-12 col-xs-12">
              <h5>Jasa Pengiriman </h5>
              
              <div class="delivery-service"> 
                <img data-toggle="tooltip" src="<?php echo base_url() ?>src/jasa_pengiriman/jne.png" alt="JNE Express" title="JNE Express" data-original-title="Pos Indonesia" class="img-responsive">
              </div>
              <div class="delivery-service"> 
                <img data-toggle="tooltip" src="<?php echo base_url() ?>src/jasa_pengiriman/pos-indonesia.png" alt="POS INDONESIA" title="POS INDONESIA" data-original-title="Pos Indonesia" class="img-responsive">
              </div>
              <div class="delivery-service"> 
                <img data-toggle="tooltip" src="<?php echo base_url() ?>src/jasa_pengiriman/tiki.png" alt="TIKI" title="TIKI" data-original-title="Pos Indonesia" class="img-responsive">
              </div>
              
            </div>
          </div>
          <div class="column col-lg-4 col-md-4 col-sm-5 col-xs-12">
            <h5>Pembayaran Bank</h5>
            <div class="side-item">
            	
              <div class="product-thumb clearfix flex">
                <div class="image-bank"><img src="<?php echo base_url() ?>src/bank/Logo_Bank_Mandiri_Syariah_kecil.png" alt="MANDIRI SYARIAH" title="MANDIRI SYARIAH" class="img-responsive" /></div>
                <div class="caption">
                  <p class="price">No. Rek : 711 488 1141 </p>
                   <div class="rating"> A/N : Ukhwah Store</div>
                </div>
              </div>
            	
            </div>
          </div>
         
        </div>
      </div>
    </div>
    <div class="fpart-second">
      <div class="container">
        <div id="powered" class="clearfix">
          <div class="powered_text pull-left flip">
            <p>Ukhwah Store © <?php echo date('Y')?> </p>
          </div>
        </div>
      </div>
    </div>
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
  </footer>
  <!--Footer End-->
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- ./ end modal -->

<!-- JS Part Start-->
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/swipebox/lib/ios-orientationchange-fix.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/swipebox/src/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>themes/marketshop/js/custom.js?v=02"></script>
<!-- toaster -->
<script type="text/javascript" src="<?php echo base_url() ?>libs/toastr/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/toastr/toastr.min.css">
<!-- toaster -->
<script type="text/javascript">
// Elevate Zoom for Product Page image
  $("#zoom_01").elevateZoom({
    gallery:'gallery_01',
    cursor: 'pointer',
    galleryActiveClass: 'active',
    imageCrossfade: true,
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 500,
    lensFadeIn: 500,
    lensFadeOut: 500,
    loadingIcon: 'image/progress.gif'
    }); 
  //////pass the images to swipebox
  $("#zoom_01").bind("click", function(e) {
    var ez =   $('#zoom_01').data('elevateZoom');
    $.swipebox(ez.getGalleryList());
    return false;
  });
</script>
<!-- JS Part End-->
<script type="text/javascript">
(function(j){
  /* start Cart Js */

  /* update keranjang belanja */
  items_nav()

  j('.instock').html(function(){
    if( parseInt(j(this).html()) < 1 )
      j('#btn-cart').css("display","none");
  })

  /* masukan produk kedalam keranjang */
  j('#btn-cart').on('click',function(e){
    e.preventDefault();
    if ( cek_input_cart().stats==0 ) {
      toastr["warning"]( cek_input_cart().msg );
    } else {
      var _post= {};
      _post['id']= j('#id_produk').val();
      _post['quantity']= j('#input-quantity').val();
      
      if ( cek_product_size().stats ) {
        if ( ! cek_product_size().size ) {
          toastr["warning"]( "Maaf Anda Belum Memilih Ukuran" );
        } else {
          _post['size']= cek_product_size().size;
          j.post('<?php echo base_url() ?>cart/add',_post,function(data){
            toastr["success"]( data );

            /* update keranjang belanja */
            items_nav()

          })  
          
        }

      } else {
        j.post('<?php echo base_url() ?>cart/add',_post,function(data){
          toastr["success"]( data );

          /* update keranjang belanja */
          items_nav()

        })  
      }

    }
  })

  /* jika ukuran produk tersedia maka hasus diilih terlebih dahulu */
  function cek_product_size(){
    var data={};
    if ( ($('input[name=product_size]').length > 0) ) {
      data['stats']= true
      data['size']= ($('input[name=product_size]:checked').length > 0) ? $('input[name=product_size]:checked').val() : false
    } else {
      data['stats']= false
    }
    return data
  }

  /* hapus produk */
  j(document).on('click','.removeItemNav', function(e){
    e.preventDefault()
    j.post('<?php echo base_url() ?>cart/remove', { "rowid": $(this).attr('rowid') }, function(data){
      /* update keranjang belanja */
      items_nav()
      // console.log(data)

    })
  })

  /* update keranjang belanja */
  j(document).on( "click" ,".qtyBtnViewCart" ,function() {
    var quantity= $(this).closest('tr').find('.input-quantity');
    var stock= $(this).closest('tr').find('.stock');
    var rowid= $(this).closest('tr').find('.rowid').val();
		if($(this).hasClass("plus")){
      if ( quantity.val() < parseInt( stock.val() ) ) {
          var qty = quantity.val();
          qty++;
          quantity.val(qty);
          updateViewCart({
            "rowid" :rowid,
            "qty" :qty,
          })
      } else {
          toastr["warning"]( "Maaf Stok Sudah Limit" );
      }
		}else{
			var qty = quantity.val();
			qty--;
			if(qty>0){
        quantity.val(qty);
        updateViewCart({
          "rowid" :rowid,
          "qty" :qty,
        })
			}else {
        toastr["warning"]( "Maaf Jumlah Tidak Boleh lebih kecil dari 1" );
      }
    }
    

		return false;
  });
  
  /* update keranjang belanja */
  j(document).on('click','.removeItemViewCart', function(){
    var rowid= $(this).closest('tr').find('.rowid').val();
    updateViewCart({
      "rowid" :rowid,
      "qty" :0,
    })

  })

  j(document).on('click','.btnCheckout',function(e){
    e.preventDefault()
    if( j('.users').attr('stats')=='0' )
      toastr["warning"]( "Untuk Melanjutkan Pemesanan Silahkan Melakukan Login Terlebih Dahulu Jika Belum Punya Akun Bisa Memilih Menu Daftar" );
    else
    window.location.replace( j(this).attr('href') )
  })

  /* cek produk sebelum disimpan keranjang */
  function cek_input_cart(){
    var quantity= j('#input-quantity').val();
    
    return {
      "stats" :( quantity > 0 ) ? 1: 0,
      "msg" :( quantity > 0 ) ? '': 'Maaf Anda Belum Memasukan Jumlah',
      "quantity" :quantity,
    };
  }

  /* ambil data produk untuk keranjang navbar */
  function items_nav()
  {
    j.get('<?php echo base_url() ?>cart/items_nav',function(data){
      j('#cartTotal').html(data.items_total)
      j('#itemsNav').html(data.items)
      // console.log(data)
    },'json')
  }

  /* update data Harga, Total, Sub total di keranjang belanja */
  function updateViewCart(get)
  {
    if (get.qty==0) {
      var _sub_total= j("input[value='"+get.rowid+"']").closest('tr').remove()
      
    } else {
      var _sub_total= j("input[value='"+get.rowid+"']").closest('tr').find('.subtotal');
      var _weight= j("input[value='"+get.rowid+"']").closest('tr').find('.weight');
      var _total= j('.total');
      j.post('<?php echo base_url() ?>cart/update',get,function(data){
        _sub_total.html( data.subtotal )
        _weight.html(  data.weight )
        _total.html(  data.total )
        _weight_total= j('.biaya-kirim').attr('data-weight',getWeightTotal())
        set_kurir()
        
      },'json')
      
    }
    // console.log(items_nav())
    // console.log(get)
  }
  function getWeightTotal()
  {
    var a=0;
    j.each(j('.weight'),function(i,item){
      a +=(j(item).html()*1)
    })
    return (a)
  }

  /* End Cart Js */

  /* Start Pelanggan Js */
    /* users */
    users()

    /* form login */
    j(document).on('click','.btnLogin',function(){
      j.get('<?php echo base_url() ?>login',function(data){
        j('#myModal').find('.modal-title').html(data.title)
        j('#myModal').find('.modal-body').html(data.form)
      },'json')
    })

    /* form daftar */
    j(document).on('click','.btnDaftar',function(){
      j.get('<?php echo base_url() ?>daftar',function(data){
        j('#myModal').find('.modal-title').html(data.title)
        j('#myModal').find('.modal-body').html(data.form)
      },'json')
    })

    /* cek login pelanggan */
    j(document).on('submit','#formLogin',function(e){
      e.preventDefault()
      var formData = new FormData(this);
      $.ajax({
          url: $(this).attr("action"),
          type: 'POST',
          data: formData,
          success: function (data) {
            if ( data.stats==1 ) {
              toastr["success"]( data.msg );
              $("#myModal").modal("hide");
              $('.users').attr('stats','1');
              users()
            } else {
              toastr["warning"]( data.msg );
            }
          },
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json'
      });
    })

    /* Register pelanggan */
    j(document).on('submit','#formDaftar',function(e){
      e.preventDefault()
      var formData = new FormData(this);
      $.ajax({
          url: $(this).attr("action"),
          type: 'POST',
          data: formData,
          success: function (data) {
            if ( data.stats==1 ) {
              toastr["success"]( data.msg );
              $("#myModal").modal("hide");
              $('.users').attr('stats','1');
              users()
            } else {
              toastr["warning"]( data.msg );
            }
          },
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json'
      });
    })

    function users()
    {
      j.get('<?php echo base_url() ?>users',function(data){
        j('.users').html(data.html)
      },'json')
    }

    /* transaksi User */
    j(document).on('click','a#transaction',function(e){
      e.preventDefault()
      transaction( j(this).attr('title') )
    })
    j(document).on('click','a.detail-transaction',function(e){
      e.preventDefault()
      transactionDetail( j(this).attr('title'), j(this).attr('href') )
    })
    j(document).on('click','button.btn-bill-conf', function(e){
      e.preventDefault()
      var id_pemesanan= j(this).attr('data-id')
      j.get('<?php echo base_url() ?>transaction-accept/' +id_pemesanan,function(data){
        if ( data.stats==1 ) {
          toastr["success"]( data.msg );
          transaction( 'Informasi Transaksi' )
        } else {
          toastr["warning"]( data.msg );
        }
      },'json')
    })
    function transaction(title){
      j("div#myModal.modal.fade").find('.modal-title').html( title )
      j.get('<?php echo base_url() ?>transaction',function(data){
        j("div#myModal.modal.fade").find('.modal-body').html( data.html )
        j('div#myModal').find('.modal-dialog').addClass('modal-lg');
      },'json')
      j("div#myModal.modal.fade").modal("show");
    }
    function transactionDetail(title,urls){
      j("div#myModal.modal.fade").find('.modal-title').html( title )
      j.get(urls,function(data){
        j("div#myModal.modal.fade").find('.modal-body').html( data.html )
        j('div#myModal').find('.modal-dialog').addClass('modal-lg');
      },'json')
      j("div#myModal.modal.fade").modal("show");
      // $("div#myModal").on('hide.bs.modal', function(){
      //   console.log(transaction('Informasi Transaksi'))
      // });
    }
    /* setting User */
    j(document).on('click','a#setting',function(e){
      e.preventDefault()
      settingUser( j(this).attr('title') )
    })
    function settingUser(title){
      j("div#myModal.modal.fade").find('.modal-title').html( title )
      j.get('<?php echo base_url() ?>setting',function(data){
        j("div#myModal.modal.fade").find('.modal-body').html( data.html )
      },'json')
      j("div#myModal.modal.fade").modal("show");
    }
    j(document).on('click','a#formEditUser',function(e){
      e.preventDefault()
      j("div#myModal.modal.fade").find('.modal-title').html( j(this).attr('title') )
      j.get('<?php echo base_url() ?>form-edit-user',function(data){
        j("div#myModal.modal.fade").find('.modal-body').html( data.html )
      },'json')
      j("div#myModal.modal.fade").modal("show");
    })
    j(document).on('submit','#formUpdateUser',function(e){
      e.preventDefault()
      var formData = new FormData(this);
      $.ajax({
          url: $(this).attr("action"),
          type: 'POST',
          data: formData,
          success: function (data) {
            if ( data.stats==1 ) {
              toastr["success"]( data.msg );
              settingUser('Informasi Pengaturan Akun')
              users()
            } else {
              toastr["warning"]( data.msg );
            }
          },
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json'
      });
    })
    /* Start alamat */
    j(document).on('click','a#formAddAlamat',function(e){
      e.preventDefault()
      j("div#myModal.modal.fade").find('.modal-title').html( j(this).attr('title') )
      j.get('<?php echo base_url() ?>form-add-alamat',function(data){
        j("div#myModal.modal.fade").find('.modal-body').html( data.html )
        selProvinsi()
      },'json')
      j("div#myModal.modal.fade").modal("show");
    })
    j(document).on('submit','#formStoreAlamat',function(e){
      e.preventDefault()
      var formData = new FormData(this);
      formData.append('nama_provinsi', j('#selProvinsi option:selected').text() );
      formData.append('nama_kota', j('#selKota option:selected').text() );
      $.ajax({
          url: $(this).attr("action"),
          type: 'POST',
          data: formData,
          success: function (data) {
            if ( data.stats==1 ) {
              toastr["success"]( data.msg );
              settingUser('Informasi Pengaturan Akun')
              users()
            } else {
              toastr["warning"]( data.msg );
            }
          },
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json'
      });
    })
    j(document).on('click','a.set-primary', function(e){
      e.preventDefault()
      j.get(j(this).attr('href'),function(data){
        if ( data.stats==1 ) {
          toastr["success"]( data.msg );
          settingUser('Informasi Pengaturan Akun')
          users()
        } else {
          toastr["warning"]( data.msg );
        }
      },'json')
    })
    j(document).on('click','a.edit',function(e){
      e.preventDefault()
      j("div#myModal.modal.fade").find('.modal-title').html( j(this).attr('title') )
      j.get(j(this).attr('href'),function(data){
        j("div#myModal.modal.fade").find('.modal-body').html( data.html )
        selProvinsi()
        selKota( j('select#selProvinsi.form-control').attr('data-provinsi') )
      },'json')
      j("div#myModal.modal.fade").modal("show");
    })
    j(document).on('submit','#formUpdateAlamat',function(e){
      e.preventDefault()
      var formData = new FormData(this);
      formData.append('nama_provinsi', j('#selProvinsi option:selected').text() );
      formData.append('nama_kota', j('#selKota option:selected').text() );
      $.ajax({
          url: $(this).attr("action"),
          type: 'POST',
          data: formData,
          success: function (data) {
            if ( data.stats==1 ) {
              toastr["success"]( data.msg );
              settingUser('Informasi Pengaturan Akun')
              users()
            } else {
              toastr["warning"]( data.msg );
            }
          },
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json'
      });
    })
    j(document).on('click','a.delete', function(e){
      e.preventDefault()
      j.get(j(this).attr('href'),function(data){
        if ( data.stats==1 ) {
          toastr["success"]( data.msg );
          settingUser('Informasi Pengaturan Akun')
          users()
        } else {
          toastr["warning"]( data.msg );
        }
      },'json')
    })
    j(document).on('change','select#selProvinsi.form-control',function(){
      selKota( j(this).val() )
    })
    function selProvinsi(){
      if ( j('select#selProvinsi.form-control').attr('data-provinsi')=='' ) {
        j.get('<?php echo base_url() ?>rajaongkir/province',function(data){
          var html= `<option value="" selected disabled> -- Pilih Provinsi -- </option>`
          j.each(data.rajaongkir.results, function(i,item){
            html += `<option value="${item.province_id}">${item.province}</option>`
          })
          j('select#selProvinsi.form-control').html( html )
          
        },'json')

      }else {
        j.get('<?php echo base_url() ?>rajaongkir/province',function(data){
          var html= `<option value="" disabled> -- Pilih Provinsi -- </option>`
          j.each(data.rajaongkir.results, function(i,item){
            html += `<option value="${item.province_id}" `+(j('select#selProvinsi.form-control').attr('data-provinsi')==item.province_id ? 'selected' : null)+`>${item.province}</option>`
          })
          j('select#selProvinsi.form-control').html( html )
          
        },'json')
      }
    }
    function selKota(province_id){
      if ( j('select#selProvinsi.form-control').attr('data-provinsi')=='' ) {
        j.get('<?php echo base_url() ?>rajaongkir/city?province='+province_id,function(data){
          var html= `<option value="" selected disabled> -- Pilih Kota -- </option>`
          j.each(data.rajaongkir.results, function(i,item){
            html += `<option value="${item.city_id}">${item.city_name}</option>`
          })
          j('select#selKota.form-control').html( html )
          
        },'json')

      }else {
        j.get('<?php echo base_url() ?>rajaongkir/city?province='+province_id,function(data){
          var html= `<option value="" disabled> -- Pilih Kota -- </option>`
          j.each(data.rajaongkir.results, function(i,item){
            html += `<option value="${item.city_id}" `+(j('select#selKota.form-control').attr('data-kota')==item.city_id ? 'selected' : null)+`>${item.city_name}</option>`
          })
          j('select#selKota.form-control').html( html )
          
        },'json')
      }
      
    }
    /* End alamat */
  /* End Pelanggan Js */
  // toastr["success"]( 'data.msg' );
/*   toastr.options.onShown = function() { console.log('hello'); }
toastr.options.onHidden = function() { console.log('goodbye'); }
toastr.options.onclick = function() { console.log('clicked'); }
toastr.options.onCloseClick = function() { console.log('close button clicked'); } */
  /* config toastr */
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  /* config toastr */

  /* form */
      /* proses pemesanan */
      j(document).on('submit','#formCheckout',function(e){
      e.preventDefault()
      var formData = new FormData(this);
          formData.append('alamat_pengiriman', j('#formFullName').text() +'<br>' +j('#formFullAddress').html() );
      $.ajax({
          url: $(this).attr("action"),
          type: 'POST',
          data: formData,
          success: function (data) {
            if ( data.stats==1 ) {
              toastr.options.onHidden = function(){
                // this will be executed after fadeout, i.e. 2secs after notification has been show
                window.location.replace('<?php echo base_url() ?>')
              };
              toastr["success"]( data.msg );
            } else {
              toastr["warning"]( data.msg );
            }
          },
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json'
      });
    })

    /* form kolom alamat on change */
    j(document).on('click','a.address-mod',function(e){
      e.preventDefault()
      var d= {
        "id" : j(this).attr('data-idkota'),
        "name" : j(this).attr('data-nama'),
        "address" : j(this).find('p').html()
      }
      /* console.log(d) */

      /* target updated */
      var t= {
        "formIdKota" : j('input#formIdKota').val( d.id ),
        "formFullName" : j('strong#formFullName').html( d.name ),
        "formFullAddress" : j('p#formFullAddress').html( d.address )
      }
      // console.log(t)
      set_kurir()
        
    })

    /* set default kurir */
    if ( j('select#kurir').length > 0 ) {
      if ( j(document).find('input#formIdKota').val()!='' ) {
        set_kurir()
      }
    }
    function set_kurir(data=null){
      if ( data==null ) {
        var _get= {
          "weight" : j(document).find('.biaya-kirim').attr('data-weight'),
          "destination" : j(document).find('input#formIdKota').val(),
        } 
      } else {
        var _get= data
      }
      /* console.log(_get); */
      j.get('<?php echo base_url() ?>rajaongkir/courier-html-option',_get,function(html){
        j('#kurir').html( html )
        /* target updated */
        var t= {
          "biayaKirim" : j('td.biaya-kirim').html( 'Rp. '+formatRupiah( j(document).find('select#kurir option:selected').val() ) ),
          "formBiayaOngkir" : j('input#formBiayaOngkir').val( j('select#kurir option:selected').val() ),
          "totalPembayaran" : j('td.total-pembayaran').html( 'Rp. '+formatRupiah( idrToNumber( $('td.total').html() ) +(j('td.kode-unik').html()*1) +(j('select#kurir option:selected').val()*1) ) ),
          "formJasaPengiriman" : j('input#formJasaPengiriman').val( j('select#kurir option:selected').attr('kurir') ),
        }        
        
      },'html')
    }

    /* kurir on change */
    j('select#kurir').on('change',function(){
      /* target updated */
      var t= {
        "biayaKirim" : j('td.biaya-kirim').html( 'Rp. '+formatRupiah( j(this).val() ) ),
        "formBiayaOngkir" : j('input#formBiayaOngkir').val( j(this).val() ),
        "totalPembayaran" : j('td.total-pembayaran').html( 'Rp. '+formatRupiah( idrToNumber( $('td.total').html() ) +(j('td.kode-unik').html()*1) +(j(this).val()*1) ) ),
        "formJasaPengiriman" : j('input#formJasaPengiriman').val( j('select#kurir option:selected').attr('kurir') ),
      } 
      
    })
  /* form */

  /* Fungsi formatRupiah */
  function formatRupiah(bilangan){
    var	number_string = bilangan.toString(),
      sisa 	= number_string.length % 3,
      rupiah 	= number_string.substr(0, sisa),
      ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
        
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    return rupiah;
  }

  /* fungsi rupiah to number */
  function idrToNumber(str)
  {
    return parseInt(str.replace(/Rp|\.|/g,''))
  }

})(jQuery);

function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}

</script>
</body>
</html>