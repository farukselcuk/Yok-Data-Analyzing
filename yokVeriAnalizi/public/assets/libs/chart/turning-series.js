$(function() {
    var datasets = {

        "Tıp": {
            label: "Tıp",
            data: [
                [2022, 500],
                [2023, 400],
                [2024, 450],
            ]
        },
        "Diş": {
            label: "Diş",
            data: [
                 [2022, 460],
                 [2023, 350],
                 [2024, 440],
            ]
        },
          "Yazılım Mühendisliği ": {
                    label: "Yazılım Mühendisliği",
                    data: [

                        [2022, 250],
                        [2023, 430],
                        [2024, 350],


                    ]
                },
        "Makine Mühendisliği": {
            label: "Makine Mühendisliği",
            data: [
              [2022, 310],
              [2023, 380],
              [2024, 290],
            ]
        },
        "Elektrik Mühendisliği": {
            label: "Elektrik Mühendisliği",
            data: [
               [2022, 200],
               [2023, 370],
               [2024, 300],
            ]
        },
        "Endistrü Mühendisliği": {
            label: "Endistrü Mühendisliği",
            data: [
              [2022, 250],
                            [2023, 290],
                            [2024, 230],
            ]
        },
        "Bilgisayar Mühendisliği": {
            label: "Bilgisayar Mühendisliği",
            data: [
             [2022, 320],
                           [2023, 420],
                           [2024, 315],
            ]
        },


    };
   /* var dataSet = [
    {label: "USA", color: "#005CDE" },
    {label: "Russia", color: "#005CDE" },
    { label: "UK", color: "#00A36A" },
    { label: "Germany", color: "#7D0096" },
    { label: "Denmark", color: "#992B00" },
    { label: "Sweden", color: "#DE000F" },
    { label: "Norway", color: "#ED7B00" }
];*/
    // hard-code color indices to prevent them from shifting as
    // countries are turned on/off
    var i = 0;
    $.each(datasets, function(key, val) {
        val.color = i;
        ++i;
    });

    // insert checkboxes
    var choiceContainer = $("#choices");
    $.each(datasets, function(key, val) {
        choiceContainer.append('<input type="checkbox" name="' + key +
            '" checked="checked" id="id' + key + '">' +
            '<label for="id' + key + '">' +
            val.label + '</label>');
    });
    choiceContainer.find("input").click(plotAccordingToChoices);


    function plotAccordingToChoices() {
        var data = [];

        choiceContainer.find("input:checked").each(function() {
            var key = $(this).attr("name");
            if (key && datasets[key])
                data.push(datasets[key]);
        });

        if (data.length > 0)
            $.plot($("#placeholder"), data, {
                yaxis: { min: 0 },
                xaxis: { tickDecimals: 0 }
            });
    }

    plotAccordingToChoices();
});
