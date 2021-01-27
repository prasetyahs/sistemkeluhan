$(function() {
    $('.print').click(function() {
        printDiv("table-responsive");

    });

    function printDiv(classTable) {
        var divToPrint = document.getElementsByClassName(classTable);
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('#classModal').ready(function() {
        $('input[type="checkbox"]').on('change', function() {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });
    });
    $("#sel1").val("default");
    $("#sel2").val("default");
    $('#sel1').change(function() {
        var jenisKeluhan = this.value;
        var appendMore = "<div class='form-group keluhan'><label for='keluhan'>Keluhan</label><input name='keluhan' class='form-control' id='sel1' type='text'>";
        jQuery.get();
        jQuery.get("http://localhost/sistemkeluhan/home/KeluhanPelanggan/" + jenisKeluhan, function(data, status) {
            $('.keluhan').remove();
            // for (var k in data) {
            //     // appendMore += "<option value= " + data[k]['id_keluhanplgn'] + ">";
            //     // appendMore += data[k]['nama_keluhanplgn'] + "</option>";
            // }
            // appendMore += " </select ></div >";
            appendMore += "<div class='form-group keluhan' id='pesan'><label for='pesan' class='col-form-label'>Pesan</label>    <textarea class='form-control' name='pesan'></textarea></div>";
            $('.form').append(appendMore);
        })
    });

    var message = $('#message').val();
    var isTrue = $('#istrue').val();
    if (message.length > 0) {
        swal({
            title: isTrue == "Sukses" ? "Berhasil" : "Gagal",
            text: message,
            icon: isTrue == "Sukses" ? "success" : "error",
        });
    }
    $('#message').val("");
    $("#sendreport").click(function() {
        $("#form1").trigger('submit');
    });

    $('#ulang').click(() => {
        $('select[name="number[]"]').val(0);
        $('label').remove('.info'); 
    });

    $('#proses').click(() => {
        var number = $('select[name="number[]"]').serializeArray();
        var url = $('#url').val();
        $.ajax({
            url: url,
            type: "post",
            data: number,
            dataType: 'JSON',
            success: function(response) {
                $('.simulasi').append('<label class="info" style="color:red;font-size:13px">* Prioritas Utama ' + response['name'] + ' dengan nilai ' + response['max'] + '</label>')
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});