$.ajax({
    url: 'https://tower-defense.spolnici.com/loadfromDb.php',
    success: function (response) {
        response.map((item,index) => {
            $('#data').append(`<tr><th>${index+1}</th><th>${item.name}</th><th>${item.level}</th><th>${item.wave}</th></tr>`)
        })
    }
});