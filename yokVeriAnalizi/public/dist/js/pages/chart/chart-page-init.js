$(function () {
    // Checkbox ile seçilecek bölüm verileri
    const data = {
        Tip: [[0, 575.69], [1, 583.87], [2, 545.33]],
        Dis: [[0, 545.59], [1, 529.97], [2, 558.45]],
        Yazilim: [[0, 440.59], [1, 460.87], [2, 435.33]],
        Makine: [[0, 480.99], [1, 512.07], [2, 469.22]],
        Elektrik: [[0, 486.79], [1, 530.67], [2, 507.65]],
        Bilgisayar: [[0, 440.59], [1, 460.87], [2, 435.33]],
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
                max: 600,
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
