<script>
    // Create chart for the first load of the page
    var ctx = $('#myChart').get(0).getContext('2d');
    var myChart;

    var data = {
        labels: [
            'Choices 1',
            'Choices 2',
            'Choices 3',
            'Choices 4'
        ],
        datasets: [{
            label: 'CC1',
            backgroundColor: 'rgba(0, 0, 0, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            data: [
                {{ $cc1->choices1_count }},
                {{ $cc1->choices2_count }},
                {{ $cc1->choices3_count }},
                {{ $cc1->choices4_count }}
            ]
        }, {
            label: 'CC2',
            backgroundColor: 'rgba(0, 128, 128, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $cc2->choices1_count }},
                {{ $cc2->choices2_count }},
                {{ $cc2->choices3_count }},
                {{ $cc2->choices4_count }}
            ]
        }, {
            label: 'CC3',
            backgroundColor: 'rgba(139, 69, 19, 0.8)',
            borderColor: 'rgba(255, 162, 235, 1)',
            borderWidth: 1,
            hidden: true,
            data: [
                {{ $cc3->choices1_count }},
                {{ $cc3->choices2_count }},
                {{ $cc3->choices3_count }},
            ]
        }]
    };

    var labelsForCC1 = [
        'I know what a CC is and I saw this office\'s CC',
        'I know what a CC is but did NOT see this office\'s CC',
        'I learned of the CC only when I saw this office\'s CC.',
        'I do not know what a CC is and I did not see one in this office.'
    ];

    var labelsForCC2 = [
        'Easy to see',
        'Somewhat easy to see',
        'Difficult to see',
        'Not visible at all'
    ];

    var labelsForCC3 = [
        'Helped very much',
        'Somewhat helped',
        'Did not help'
    ];

    var options = {
        plugins: {
            tooltip: {
                callbacks: {
                    title: function(tooltipItem, data) {
                        var datasetIndex = tooltipItem[0]
                            .datasetIndex;
                        var index = tooltipItem[0].dataIndex;
                        if (datasetIndex === 0) {
                            return labelsForCC1[index];
                        } else if (datasetIndex === 1) {
                            return labelsForCC2[index];
                        } else {
                            return labelsForCC3[index];
                        }
                    }
                }
            }
        }
    };

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });

    // Automatically submit the form after selecting a year
    $('#select').change(function() {
        $('#yearForm').submit();
    });

    // AJAX if the user select a specific year
    $('#yearForm').submit(function(event) {

        event.preventDefault();

        var formData = $('#select').val();

        $.ajax({
            url: 'http://localhost:8000/feedback-admin/public/dashboard/cc?year=' +
                formData,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Handle successful response
                var choices1Total = parseInt(response[0]?.choices1_count || 0) +
                    parseInt(response[1]?.choices1_count || 0) +
                    parseInt(response[2]?.choices1_count || 0);
                var choices2Total = parseInt(response[0]?.choices2_count || 0) +
                    parseInt(response[1]?.choices2_count || 0) +
                    parseInt(response[2]?.choices2_count || 0);
                var choices3Total = parseInt(response[0]?.choices3_count || 0) +
                    parseInt(response[1]?.choices3_count || 0) +
                    parseInt(response[2]?.choices3_count || 0);
                var choices4Total = parseInt(response[0]?.choices4_count || 0) +
                    parseInt(response[1]?.choices4_count || 0);
                var yearlyFeedbacks = choices1Total + choices2Total + choices3Total +
                    choices4Total;

                $('#cc1-choices1').text(response[0]?.choices1_count || 0);
                $('#cc1-choices2').text(response[0]?.choices2_count || 0);
                $('#cc1-choices3').text(response[0]?.choices3_count || 0);
                $('#cc1-choices4').text(response[0]?.choices4_count || 0);
                $('#cc2-choices1').text(response[1]?.choices1_count || 0);
                $('#cc2-choices2').text(response[1]?.choices2_count || 0);
                $('#cc2-choices3').text(response[1]?.choices3_count || 0);
                $('#cc2-choices4').text(response[1]?.choices4_count || 0);
                $('#cc3-choices1').text(response[2]?.choices1_count || 0);
                $('#cc3-choices2').text(response[2]?.choices2_count || 0);
                $('#cc3-choices3').text(response[2]?.choices3_count || 0);
                $('#cc3-choices3').text(response[2]?.choices3_count || 0);
                $('#choices1-total').text(choices1Total);
                $('#choices2-total').text(choices2Total);
                $('#choices3-total').text(choices3Total);
                $('#choices4-total').text(choices4Total);
                $('#total-feedbacks').text(response[3]);
                $('#yearly-feedbacks').text(response[4]);

                // Define data
                var data = {
                    labels: [
                        'Choices 1',
                        'Choices 2',
                        'Choices 3',
                        'Choices 4'
                    ],
                    datasets: [{
                        label: 'CC1',
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        borderColor: 'rgba(255, 162, 235, 1)',
                        borderWidth: 1,
                        data: [
                            response[0]?.choices1_count || 0,
                            response[0]?.choices2_count || 0,
                            response[0]?.choices3_count || 0,
                            response[0]?.choices4_count || 0
                        ]
                    }, {
                        label: 'CC2',
                        backgroundColor: 'rgba(0, 128, 128, 0.8)',
                        borderColor: 'rgba(255, 162, 235, 1)',
                        borderWidth: 1,
                        hidden: true,
                        data: [
                            response[1]?.choices1_count || 0,
                            response[1]?.choices2_count || 0,
                            response[1]?.choices3_count || 0,
                            response[1]?.choices4_count || 0
                        ]
                    }, {
                        label: 'CC3',
                        backgroundColor: 'rgba(139, 69, 19, 0.8)',
                        borderColor: 'rgba(255, 162, 235, 1)',
                        borderWidth: 1,
                        hidden: true,
                        data: [
                            response[2]?.choices1_count || 0,
                            response[2]?.choices2_count || 0,
                            response[2]?.choices3_count || 0
                        ]
                    }]
                };

                var labelsForCC1 = [
                    'I know what a CC is and I saw this office\'s CC',
                    'I know what a CC is but did NOT see this office\'s CC',
                    'I learned of the CC only when I saw this office\'s CC.',
                    'I do not know what a CC is and I did not see one in this office.'
                ];

                var labelsForCC2 = [
                    'Easy to see',
                    'Somewhat easy to see',
                    'Difficult to see',
                    'Not visible at all'
                ];

                var labelsForCC3 = [
                    'Helped very much',
                    'Somewhat helped',
                    'Did not help'
                ];

                // Configure options
                var options = {

                    plugins: {
                        tooltip: {
                            callbacks: {
                                title: function(tooltipItem, data) {
                                    var datasetIndex = tooltipItem[0]
                                        .datasetIndex;
                                    var index = tooltipItem[0].dataIndex;
                                    if (datasetIndex === 0) {
                                        return labelsForCC1[index];
                                    } else if (datasetIndex === 1) {
                                        return labelsForCC2[index];
                                    } else {
                                        return labelsForCC3[index];
                                    }
                                }
                            }
                        }
                    }
                };

                // If the chart does not exist, create it
                if (!myChart) {
                    myChart = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: options
                    });
                } else {
                    // If the chart already exists, update its data
                    myChart.data = data;
                    myChart.update();
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            }
        });
    });
</script>
