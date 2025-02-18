$(function () {
    // Checkbox ile seçilecek bölüm verileri
    const data = {
        Tip: [[0, 681.65], [1, 603.67], [2, 532.12]],
        Dis: [[0, 597.51], [1, 552.29], [2, 489.27]],
        Yazilim: [[0, 545.52], [1, 476.83], [2, 454.63]],
        Makine: [[0, 508.07], [1, 563.42], [2, 508.63]],
        Elektrik: [[0, 486.24], [1, 534.59], [2, 507.81]],
        Bilgisayar: [[0, 631.53], [1, 544.67], [2, 514.28]],
    };

    const colors = {
        Tip: "#C0392B",       // Koyu kırmızı
        Dis: "#27AE60",       // Koyu yeşil
        Yazilim: "#2980B9",   // Koyu mavi
        Makine: "#8E44AD",    // Koyu mor
        Elektrik: "#D35400",  // Koyu turuncu
        Bilgisayar: "#16A085" // Koyu teal
    };

    const selectedFilters = new Set(Object.keys(data)); // Varsayılan seçili bölümler

    // Grafik çizim fonksiyonu
    function plotGraph() {
        const plotData = Array.from(selectedFilters).map((key) => ({
            label: key,
            data: data[key],
            color: colors[key],
        }));

        $.plot("#flot-line-chart", plotData, {
            series: {
                lines: { show: true },
                points: { show: true },
            },
            xaxis: {
                ticks: [[0, "2022"], [1, "2023"], [2, "2024"]],
            },
            yaxis: {
                min: 430,
                max: 700,
            },
            grid: {
                hoverable: true,
                clickable: true,
            },
            tooltip: true,
            tooltipOpts: {
                content: "'%s' for %x: %y",
                shifts: {
                    x: -60,
                    y: 25,
                },
            },
        });
    }

    // Checkbox değişikliklerini dinle
    $(".filter").on("change", function () {
        const value = $(this).val();
        if ($(this).is(":checked")) {
            selectedFilters.add(value);
        } else {
            selectedFilters.delete(value);
        }
        plotGraph();
    });

    // İlk grafiği çiz
    plotGraph();
});

$(function () {
    // Canlı veri örneği
    var data = [5, 10, 15, 20, 15, 30, 40],
        totalPoints = 100;

    function getRandomData() {
        if (data.length > 0) data = data.slice(1);

        // Rastgele veri oluştur
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 10,
                y = prev + Math.random() * 10 - 5;
            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }
            data.push(y);
        }

        // Y ekseni değerlerini oluştur
        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]]);
        }
        return res;
    }

    // Kontrol widget'ını ayarla
    var updateInterval = 1000;
    $("#updateInterval").val(updateInterval).change(function () {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            if (updateInterval < 1) {
                updateInterval = 1;
            } else if (updateInterval > 1000) {
                updateInterval = 1000;
            }
            $(this).val("" + updateInterval);
        }
    });

    var plot = $.plot("#real-time", [getRandomData()], {
        series: {
            shadowSize: 0, // çizgileri yumuşatma
        },
        yaxis: {
            min: 0,
            max: 100,
        },
        xaxis: {
            show: false,
        },
    });

    function update() {
        plot.setData([getRandomData()]);
        plot.draw();
        setTimeout(update, updateInterval);
    }

    update();
});
