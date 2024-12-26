$(function() {

    // Veri seti
    var datasets = {
        "Tıp": {
            label: "Tıp",
            data: smoothLine([
                [2022, 473.57],

                [2023, 479.48],
                [2024, 480.04],
            ])
        },
        "Diş": {
            label: "Diş",
            data: smoothLine([
                [2022, 439.65],
                [2023, 439.55],
                [2024, 445.13],
            ])
        },
        "Yazılım Mühendisliği": {
            label: "Yazılım Mühendisliği",
            data: smoothLine([
                [2022, 373.11],
                [2023, 374.27],
                [2024, 370.38],
            ])
        },
        "Makine Mühendisliği": {
            label: "Makine Mühendisliği",
            data: smoothLine([
                [2022, 374.78],
                [2023, 380.08],
                [2024, 377.79],
            ])
        },
        "Elektrik Mühendisliği": {
            label: "Elektrik Mühendisliği",
            data: smoothLine([
                [2022, 385.18],
                [2023, 392.07],
                [2024, 410.05],
            ])
        },
        "Endistrü Mühendisliği": {
            label: "Endistrü Mühendisliği",
            data: smoothLine([
                [2022, 386.12],
                [2023, 379.28],
                [2024, 385.978],
            ])
        },
        "Bilgisayar Mühendisliği": {
            label: "Bilgisayar Mühendisliği",
            data: smoothLine([
                [2022, 392.06],
                [2023, 390.96],
                [2024, 395.12],
            ])
        },
    };

    // Renk indeksleri
    var i = 0;
    $.each(datasets, function(key, val) {
        val.color = i;
        val.lines = { show: true }; // Çizgi olarak göster
        ++i;
    });

    // Checkbox'ları oluştur
    var choiceContainer = $("#choices");
    $.each(datasets, function(key, val) {
        choiceContainer.append('<input type="checkbox" name="' + key +
            '" checked="checked" id="id' + key + '">' +
            '<label for="id' + key + '">' +
            val.label + '</label>');
    });
    choiceContainer.find("input").click(plotAccordingToChoices);

    // Çizgileri çiz
    function plotAccordingToChoices() {
        var data = [];

        choiceContainer.find("input:checked").each(function() {
            var key = $(this).attr("name");
            if (key && datasets[key])
                data.push(datasets[key]);
        });

        if (data.length > 0)
            $.plot($("#placeholder"), data, {
                series: {
                    lines: { show: true, lineWidth: 2 }, // Çizgi kalınlığı
                },
                yaxis: { min: 0 },
                xaxis: { tickDecimals: 0 }
            });
    }

    plotAccordingToChoices();

    // Ara noktaları hesaplamak için bir fonksiyon
    function smoothLine(data) {
        var smoothedData = [];
        for (var i = 0; i < data.length - 1; i++) {
            var start = data[i];
            var end = data[i + 1];

            // Başlangıç ve bitiş noktalarını ekle
            smoothedData.push(start);

            // Ara noktalar oluştur (örneğin, 10 ara nokta)
            var steps = 100; // Ara noktaların sayısı
            for (var j = 1; j < steps; j++) {
                var t = j / steps;
                var interpolatedX = start[0] + t * (end[0] - start[0]);
                var interpolatedY = start[1] + t * (end[1] - start[1]);
                smoothedData.push([interpolatedX, interpolatedY]);
            }
        }

        // Son noktayı ekle
        smoothedData.push(data[data.length - 1]);
        return smoothedData;
    }
});
