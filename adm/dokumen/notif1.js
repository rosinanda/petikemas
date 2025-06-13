var x = 1;

function cek(){ //function untuk mengecek pesan 
    $.ajax({
        url: "cekpesan1.php", //script php untuk mengecek pesan, didalamnya berupa query select
        cache: false,
        success: function(msg){ 
            $("#jmlh1").html(msg);
        }
    });
    var waktu = setTimeout("cek()",3000);
}

$(document).ready(function(){  //event pada saat document telah selesai loadingnya
    cek();
    $("#pesan1").click(function(){ //pada saat diklik link message akan muncul daftar pesannya
        $("#loading").show();
        if(x==1){
            $("#pesan1").css("background-color","#efefef");
            x = 0;
        }else{
            $("#pesan1").css("background-color","#4B59a9");
            x = 1;
        }
        $("#info1").toggle();
        //ajax untuk menampilkan pesan yang belum terbaca
        $.ajax({
            url: "lihatpesan1.php",
            cache: false,
            success: function(msg){
                $("#loading").hide();
                $("#konten-info1").html(msg);
            }
        });

    });
    $("#content1").click(function(){
        $("#info1").hide();
        $("#pesan1").css("background-color","#4B59a9");
        x = 1;
    });
});


