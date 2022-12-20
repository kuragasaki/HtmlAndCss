$(function () {
    $("#serch_btn").click(function () {
        // 入力された値を取得
        var zip = $("#zipcode").val();
        
        // urlを設定
        var url = "";
        // 送るデータを成形する
        var param = { zipcode: zipcode };
        // サーバーと通信(Ajax)
        
        $.ajax({
            type: "get", 
            cache: false,
            data: {
                "zipcode": zip
            },
            url: "https://zipcloud.ibsnet.co.jp/api/search",
            dataType: "jsonp"
        })
        .done(function (res) {
            if (res.status != 200) {
                // 通信には成功。APIの結果がエラー
                // エラー内容を表示
                $('#zip_result').html(res.message);
            } else {
                var address = res.results[0];

                var result_str = address.zipcode + "<br />";
                result_str += address.address1 + "<br />";
                result_str += address.address2 + "<br />";
                result_str += address.address3 + "<br />";
                result_str += address.kana1 + "<br />";
                result_str += address.kana2 + "<br />";
                result_str += address.kana3 + "<br />";
                result_str += address.prefcode;

                //住所を表示
                $('#zip_result').html(result_str);
            }

        })
        .fail(function (error) {
            console.log(error);
            $('#zip_result').html("<p>通信エラーです。時間をおいてお試しください</p>");
        });
    });
});