$(function() {

    // Veri seti
    var datasets = {
        "Tıp": {
            label: "Tıp",
            data: smoothLine([
                [2022, 500],
               
                [2023, 400],
                [2024, 450],
            ])
        },
        "Diş": {
            label: "Diş",
            data: smoothLine([
                [2022, 460],
                [2023, 350],
                [2024, 440],
            ])
        },
        "Yazılım Mühendisliği": {
            label: "Yazılım Mühendisliği",
            data: smoothLine([
                [2022, 250],
                [2023, 430],
                [2024, 350],
            ])
        },
        "Makine Mühendisliği": {
            label: "Makine Mühendisliği",
            data: smoothLine([
                [2022, 310],
                [2023, 380],
                [2024, 290],
            ])
        },
        "Elektrik Mühendisliği": {
            label: "Elektrik Mühendisliği",
            data: smoothLine([
                [2022, 200],
                [2023, 370],
                [2024, 300],
            ])
        },
        "Endistrü Mühendisliği": {
            label: "Endistrü Mühendisliği",
            data: smoothLine([
                [2022, 250],
                [2023, 290],
                [2024, 230],
            ])
        },
        "Bilgisayar Mühendisliği": {
            label: "Bilgisayar Mühendisliği",
            data: smoothLine([
                [2022, 320],
                [2023, 420],
                [2024, 315],
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
